<?php
namespace ChromeDevtoolsProtocol;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Util\HeadersUtil;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Helpers;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\PhpFile;
use Symfony\Component\Filesystem\Filesystem;

require_once __DIR__ . "/vendor/autoload.php";

class Util
{

	public static function lowerFirst(string $s): string
	{
		$lastUpperIndex = -1;
		for ($i = 0, $l = strlen($s); $i < $l; ++$i) {
			if (!ctype_upper($s[$i])) {
				break;
			}

			$lastUpperIndex = $i;
		}

		if ($lastUpperIndex === -1) {
			return $s;
		} else if ($lastUpperIndex === 0) {
			return lcfirst($s);
		} else if ($lastUpperIndex === strlen($s) - 1) {
			return strtolower($s);
		} else {
			return strtolower(substr($s, 0, $lastUpperIndex)) . substr($s, $lastUpperIndex);
		}
	}

	public static function upperFirst(string $s): string
	{
		return ucfirst($s);
	}

	public static function constant(string $s): string
	{
		if ($s === "NaN") {
			return "NAN";
		} else if ($s[0] === "-") {
			$s = "minus " . substr($s, 1);
		}
		$s = static::lowerFirst($s);
		$s = preg_replace("/([A-Z])/", "_\$1", $s);
		$s = strtoupper($s);
		return implode("_", preg_split("/[^A-Z0-9]+/", $s));
	}

}

class Generator
{

	const GENERATED_COMMENT = "@generated This file has been auto-generated, do not edit.";
	const AUTHOR_COMMENT = "@author Jakub Kulhan <jakub.kulhan@gmail.com>";

	/** @var PhpFile[] */
	private $phpFiles = [];

	/** @var object[] */
	private $namedTypes = [];

	/** @var Filesystem */
	private $fs;

	public function __construct()
	{
		$this->fs = new Filesystem();
	}

	public function addClass($fqn)
	{
		$this->phpFiles[$fqn] = $phpFile = new PhpFile();

		return $phpFile
			->addNamespace(Helpers::extractNamespace($fqn))
			->addClass(Helpers::extractShortName($fqn));
	}

	public function addInterface($fqn)
	{
		$this->phpFiles[$fqn] = $phpFile = new PhpFile();

		return $phpFile
			->addNamespace(Helpers::extractNamespace($fqn))
			->addInterface(Helpers::extractShortName($fqn));
	}

	public function addTrait($fqn)
	{
		$this->phpFiles[$fqn] = $phpFile = new PhpFile();

		return $phpFile
			->addNamespace(Helpers::extractNamespace($fqn))
			->addTrait(Helpers::extractShortName($fqn));
	}

	public function process($protocol)
	{
		foreach ($protocol->domains as $domainSpec) {
			foreach ($domainSpec->types ?? [] as $typeSpec) {
				$typeName = sprintf("%s.%s", $domainSpec->domain, $typeSpec->id);
				$this->namedTypes[$typeName] = clone $typeSpec;
				$this->namedTypes[$typeName]->domain = $domainSpec->domain;
			}
		}

		foreach ($protocol->domains as $domainSpec) {
			foreach ($domainSpec->types ?? [] as $typeSpec) {
				$typeName = sprintf("%s.%s", $domainSpec->domain, $typeSpec->id);

				if ($typeSpec->type === "string") {
					if (isset($typeSpec->enum)) {
						$this->processEnumType($domainSpec->domain, $typeSpec);
					}
				} else if ($typeSpec->type === "integer") {
					// skip
				} else if ($typeSpec->type === "number") {
					// skip
				} else if ($typeSpec->type === "array") {
					if (isset($typeSpec->items->type) && !in_array($typeSpec->items->type, ["string", "number", '$ref'], true)) {
						throw new \LogicException(sprintf(
							"Unhandled item type [%s] for named array type [%s].",
							$typeSpec->items->type,
							$typeName
						));
					}
				} else if ($typeSpec->type === "object") {
					if (isset($typeSpec->properties)) {
						$this->processObjectType($domainSpec->domain, $typeSpec);
					} else {
						$this->processDynamicObjectType($domainSpec->domain, $typeSpec);
					}
				} else {
					throw new \LogicException(sprintf(
						"Unhandled type [%s] for named type [%s].",
						$typeSpec->type,
						$typeName
					));
				}
			}
		}

		$clientInterface = $this->addInterface(__NAMESPACE__ . "\\DevtoolsClientInterface");
		$clientInterface->addExtend(CloseableResourceInterface::class);
		$clientInterface->getNamespace()->addUse(CloseableResourceInterface::class);

		$clientInterface
			->addComment("Interface for Chrome devtools protocol client.")
			->addComment("")
			->addComment(static::GENERATED_COMMENT)
			->addComment("")
			->addComment(static::AUTHOR_COMMENT);

		$clientTrait = $this->addTrait(__NAMESPACE__ . "\\DevtoolsClientTrait");
		$clientTrait->addProperty("domains", [])
			->setVisibility("private")
			->addComment("@var object[]");

		foreach ($protocol->domains as $domainSpec) {
			$domainInterfaceName = __NAMESPACE__ . "\\Domain\\" . $domainSpec->domain . "DomainInterface";
			$domainInterface = $this->addInterface($domainInterfaceName);

			$clientInterface->getNamespace()->addUse($domainInterfaceName);
			$clientInterfaceMethod = $clientInterface->addMethod(Util::lowerFirst($domainSpec->domain));
			$clientInterfaceMethod->setVisibility("public");
			$clientInterfaceMethod->setReturnType($domainInterfaceName);

			if (isset($domainSpec->description)) {
				$domainInterface->addComment($domainSpec->description);
				$clientInterfaceMethod->addComment($domainSpec->description);
			} else {
				$domainInterface->addComment("{$domainSpec->domain} domain.");
				$clientInterfaceMethod->addComment("{$domainSpec->domain} domain.");
			}

			if (isset($domainSpec->experimental) && $domainSpec->experimental) {
				$domainInterface->addComment("")->addComment("@experimental");
				$clientInterfaceMethod->addComment("")->addComment("@experimental");
			}

			$domainImplementationName = __NAMESPACE__ . "\\Domain\\" . $domainSpec->domain . "Domain";
			$domainImplementation = $this->addClass($domainImplementationName);
			$domainImplementation->addImplement($domainInterfaceName);

			$domainImplementation->getNamespace()->addUse(InternalClientInterface::class);
			$internalClientAlias = Helpers::extractShortName(InternalClientInterface::class);
			$domainImplementation->addProperty("internalClient")
				->addComment("@var {$internalClientAlias}");

			$domainConstructor = $domainImplementation->addMethod("__construct");
			$domainConstructor->addParameter("internalClient")
				->setTypeHint(InternalClientInterface::class);
			$domainConstructor->addBody("\$this->internalClient = \$internalClient;");

			$clientTrait->getNamespace()->addUse($domainInterfaceName);
			$domainInterfaceAlias = Helpers::extractShortName($domainInterfaceName);
			$clientTraitMethod = $clientTrait->addMethod($clientInterfaceMethod->getName());
			$clientTraitMethod->setVisibility("public");
			$clientTraitMethod->setReturnType($domainInterfaceName);
			$clientTrait->getNamespace()->addUse($domainImplementationName);
			$domainImplementationAlias = Helpers::extractShortName($domainImplementationName);
			$clientTrait->getNamespace()->addUse(InternalClientInterface::class);
			$thisAlias = Helpers::extractShortName(InternalClientInterface::class);
			$clientTraitMethod
				->addBody("if (!isset(\$this->domains[" . var_export($domainSpec->domain, true) . "])) {")
				->addBody("\t/** @var {$thisAlias} \$this */")
				->addBody("\t\$this->domains[" . var_export($domainSpec->domain, true) . "] = new {$domainImplementationAlias}(\$this);")
				->addBody("}")
				->addBody("/** @var {$domainInterfaceAlias} \$domain */")
				->addBody("\$domain = \$this->domains[" . var_export($domainSpec->domain, true) . "];")
				->addBody("return \$domain;");

			$domainInterface->addComment("")
				->addComment(static::GENERATED_COMMENT)
				->addComment("")
				->addComment(static::AUTHOR_COMMENT);

			foreach ($domainSpec->commands as $commandSpec) {
				$interfaceCommandMethod = $domainInterface->addMethod($commandSpec->name);
				$interfaceCommandMethod->setVisibility("public");
				if (isset($commandSpec->description)) {
					$interfaceCommandMethod->addComment($commandSpec->description);
				} else {
					$interfaceCommandMethod->addComment("Call {$domainSpec->domain}.{$commandSpec->name} command.");
				}
				$interfaceCommandMethod->addParameter("ctx")
					->setTypeHint(ContextInterface::class);
				$domainInterface->getNamespace()->addUse(ContextInterface::class);
				$contextAlias = Helpers::extractShortName(ContextInterface::class);
				$interfaceCommandMethod->addComment("")->addComment("@param {$contextAlias} \$ctx");

				$implementationCommandMethod = $domainImplementation->addMethod($interfaceCommandMethod->getName());
				$implementationCommandMethod->setVisibility("public");
				$implementationCommandMethod->addParameter("ctx")
					->setTypeHint(ContextInterface::class);
				$domainImplementation->getNamespace()->addUse(ContextInterface::class);

				if (!empty($commandSpec->parameters)) {
					$requestSpec = (object)[
						"id" => Util::upperFirst($commandSpec->name . "Request"),
						"description" => "Request for {$domainSpec->domain}.{$commandSpec->name} command.",
						"properties" => $commandSpec->parameters,
					];
					$requestClass = $this->processObjectType($domainSpec->domain, $requestSpec, true);
					$requestClassName = $requestClass->getNamespace()->getName() . "\\" . $requestClass->getName();
					$domainInterface->getNamespace()->addUse($requestClassName);
					$requestClassAlias = Helpers::extractShortName($requestClassName);
					$interfaceCommandMethod->setReturnType($requestClassName);
					$interfaceCommandMethod->addComment("@param {$requestClassAlias} \$request");

					$interfaceCommandMethod->addParameter("request")
						->setTypeHint($requestClassName);

					$implementationCommandMethod->addParameter("request")
						->setTypeHint($requestClassName);
					$domainImplementation->getNamespace()->addUse($requestClassName);
				} else {
					$implementationCommandMethod->addBody("\$request = new \stdClass();");
				}

				if (empty($commandSpec->returns)) {
					$interfaceCommandMethod->setReturnType("void");
					$interfaceCommandMethod->addComment("")->addComment("@return void");

					$implementationCommandMethod->setReturnType("void");

					$implementationCommandMethod->addBody(
						"\$this->internalClient->executeCommand(\$ctx, " .
						var_export(sprintf("%s.%s", $domainSpec->domain, $commandSpec->name), true) .
						", \$request);"
					);

				} else {
					$responseSpec = (object)[
						"id" => Util::upperFirst($commandSpec->name . "Response"),
						"description" => "Response to {$domainSpec->domain}.{$commandSpec->name} command.",
						"properties" => $commandSpec->returns,
					];
					$responseClass = $this->processObjectType($domainSpec->domain, $responseSpec);
					$responseClassName = $responseClass->getNamespace()->getName() . "\\" . $responseClass->getName();
					$domainInterface->getNamespace()->addUse($responseClassName);
					$interfaceResponseClassAlias = Helpers::extractShortName($responseClassName);
					$interfaceCommandMethod->setReturnType($responseClassName);
					$interfaceCommandMethod->addComment("")->addComment("@return {$interfaceResponseClassAlias}");

					$implementationCommandMethod->setReturnType($responseClassName);
					$domainImplementation->getNamespace()->addUse($responseClassName);
					$implementationResponseClassAlias = Helpers::extractShortName($responseClassName);

					$implementationCommandMethod->addBody(
						"\$response = \$this->internalClient->executeCommand(\$ctx, " .
						var_export(sprintf("%s.%s", $domainSpec->domain, $commandSpec->name), true) .
						", \$request);"
					);
					$implementationCommandMethod->addBody("return {$implementationResponseClassAlias}::fromJson(\$response);");
				}

			}

			foreach ($domainSpec->events as $eventSpec) {
				$domainInterface->getNamespace()->addUse(SubscriptionInterface::class);
				$subscriptionAlias = Helpers::extractShortName(SubscriptionInterface::class);

				$eventTypeSpec = (object)[
					"id" => Util::upperFirst($eventSpec->name . "Event"),
					"description" => $eventSpec->description ?? null,
					"properties" => $eventSpec->parameters ?? [],
				];

				$eventClass = $this->processObjectType($domainSpec->domain, $eventTypeSpec);
				$eventClassName = $eventClass->getNamespace()->getName() . "\\" . $eventClass->getName();
				$domainInterface->getNamespace()->addUse($eventClassName);
				$eventClassAlias = Helpers::extractShortName($eventClassName);

				$interfaceAddListenerMethod = $domainInterface->addMethod("add" . Util::upperFirst($eventSpec->name) . "Listener");
				$interfaceAddListenerMethod->setVisibility("public");
				$interfaceAddListenerMethod->setReturnType(SubscriptionInterface::class);
				if (isset($eventSpec->description)) {
					$interfaceAddListenerMethod->addComment($eventSpec->description);
				} else {
					$interfaceAddListenerMethod->addComment("Subscribe to {$domainSpec->domain}.{$eventSpec->name} event.");
				}
				$interfaceAddListenerMethod->addComment("")
					->addComment("Listener will be called whenever event {$domainSpec->domain}.{$eventSpec->name} is fired.")
					->addComment("")
					->addComment("@param callable \$listener")
					->addComment("")
					->addComment("@return {$subscriptionAlias}");
				$interfaceAddListenerMethod->addParameter("listener")
					->setTypeHint("callable");

				$implementationAddListenerMethod = $domainImplementation->addMethod($interfaceAddListenerMethod->getName());
				$implementationAddListenerMethod->setVisibility("public");
				$implementationAddListenerMethod->setReturnType(SubscriptionInterface::class);
				$domainImplementation->getNamespace()->addUse(SubscriptionInterface::class);
				$domainImplementation->getNamespace()->addUse($eventClassName);
				$implementationEventClassAlias = Helpers::extractShortName($eventClassName);
				$implementationAddListenerMethod->addParameter("listener")
					->setTypeHint("callable");
				$implementationAddListenerMethod->addBody(
					"return \$this->internalClient->addListener(" .
					var_export(sprintf("%s.%s", $domainSpec->domain, $eventSpec->name), true) .
					", function (\$event) use (\$listener) {"
				);
				$implementationAddListenerMethod->addBody("\treturn \$listener($implementationEventClassAlias::fromJson(\$event));");
				$implementationAddListenerMethod->addBody("});");

				$interfaceAwaitMethod = $domainInterface->addMethod("await" . Util::upperFirst($eventSpec->name));
				$interfaceAwaitMethod->setVisibility("public");
				if (isset($eventSpec->description)) {
					$interfaceAwaitMethod->addComment($eventSpec->description);
				} else {
					$interfaceAwaitMethod->addComment("Wait for {$domainSpec->domain}.{$eventSpec->name} event.");
				}
				$domainInterface->getNamespace()->addUse(ContextInterface::class);
				$contextAlias = Helpers::extractShortName(ContextInterface::class);
				$interfaceAwaitMethod
					->addComment("")
					->addComment("Method will block until first {$domainSpec->domain}.{$eventSpec->name} event is fired.")
					->addComment("")
					->addComment("@param {$contextAlias} \$ctx")
					->addComment("")
					->addComment("@return {$eventClassAlias}");
				$interfaceAwaitMethod->addParameter("ctx")
					->setTypeHint(ContextInterface::class);
				$interfaceAwaitMethod->setReturnType($eventClassName);

				$implementationAwaitMethod = $domainImplementation->addMethod($interfaceAwaitMethod->getName());
				$implementationAwaitMethod->setVisibility("public");
				$domainImplementation->getNamespace()->addUse(ContextInterface::class);
				$domainImplementation->getNamespace()->addUse($eventClassName);
				$implementationEventClassAlias = Helpers::extractShortName($eventClassName);
				$implementationAwaitMethod->addParameter("ctx")
					->setTypeHint(ContextInterface::class);
				$implementationAwaitMethod->setReturnType($eventClassName);
				$implementationAwaitMethod->addBody(
					"return {$implementationEventClassAlias}::fromJson(\$this->internalClient->awaitEvent(\$ctx, " .
					var_export(sprintf("%s.%s", $domainSpec->domain, $eventSpec->name), true) .
					"));"
				);
			}
		}
	}

	private function processEnumType(string $domain, $typeSpec)
	{
		$enumClass = $this->addClass(__NAMESPACE__ . "\\Model\\" . $domain . "\\" . $typeSpec->id . "Enum");
		$enumClass->setFinal(true);
		if (isset($typeSpec->description)) {
			$enumClass->addComment($typeSpec->description);
		} else {
			$enumClass->addComment("Values of named type " . $domain . "." . $typeSpec->id . ".");
		}

		$enumClass->addComment("")
			->addComment(static::GENERATED_COMMENT)
			->addComment("")
			->addComment(static::AUTHOR_COMMENT);

		foreach ($typeSpec->enum as $value) {
			$enumClass->addConstant(Util::constant($value), $value);
		}

		return $enumClass;
	}

	private function processDynamicObjectType(string $domain, $typeSpec)
	{
		$objectClassName = __NAMESPACE__ . "\\Model\\" . $domain . "\\" . $typeSpec->id;
		$objectClass = $this->addClass($objectClassName);
		$objectClass->setFinal(true);
		$objectClass->addImplement(\JsonSerializable::class);

		if (isset($typeSpec->description)) {
			$objectClass->addComment($typeSpec->description);
		} else {
			$objectClass->addComment("Named type {$domain}.{$typeSpec->id}.");
		}

		$objectClass->addComment("")
			->addComment(static::GENERATED_COMMENT)
			->addComment("")
			->addComment(static::AUTHOR_COMMENT);

		$objectClass->addProperty("rawData")
			->setVisibility("private")
			->addComment("Raw data.");

		$constructor = $objectClass->addMethod("__construct");
		$constructor->addParameter("rawData");
		$constructor->addBody("\$this->rawData = \$rawData;");

		$fromJson = $objectClass->addMethod("fromJson");
		$fromJson->setStatic(true);
		$fromJson->addParameter("rawData");
		$fromJson->addBody("return new static(\$rawData);");
		$fromJson->addComment("@param object \$rawData");

		$jsonSerialize = $objectClass->addMethod("jsonSerialize");
		$jsonSerialize->addBody("return \$this->rawData;");

		$objectClass->addMethod("getRawData")
			->addBody("return \$this->rawData;");

		if ($domain === "Network" && $typeSpec->id === "Headers") {
			$objectClass->addProperty("headers")
				->setVisibility("private")
				->addComment("Normalized headers data.");

			$objectClass->getNamespace()->addUse(HeadersUtil::class);
			$headersUtilAlias = Helpers::extractShortName(HeadersUtil::class);

			$constructor
				->addBody("\$this->headers = [];")
				->addBody("foreach (\$this->rawData as \$key => \$value) {")
				->addBody("\t\$this->headers[{$headersUtilAlias}::normalize(\$key)] = \$value;")
				->addBody("}");

			$get = $objectClass->addMethod("get");
			$get->addParameter("key")->setTypeHint("string");
			$get->addParameter("default")->setDefaultValue(null);
			$get
				->addBody("\$key = {$headersUtilAlias}::normalize(\$key);")
				->addBody("if (!array_key_exists(\$key, \$this->headers)) {")
				->addBody("\treturn \$default;")
				->addBody("}")
				->addBody("return \$this->headers[\$key];");

			$has = $objectClass->addMethod("has");
			$has->addParameter("key")->setTypeHint("string");
			$has->setReturnType("bool");
			$has
				->addBody("\$key = {$headersUtilAlias}::normalize(\$key);")
				->addBody("return array_key_exists(\$key, \$this->headers);");

			$all = $objectClass->addMethod("all");
			$all->setReturnType("array");
			$all->addBody("return \$this->headers;");

			$objectClass->addImplement(\IteratorAggregate::class);
			$getIterator = $objectClass->addMethod("getIterator");
			$getIterator->setReturnType(\ArrayIterator::class);
			$objectClass->getNamespace()->addUse(\ArrayIterator::class);
			$arrayIteratorAlias = Helpers::extractShortName(\ArrayIterator::class);
			$getIterator->addBody("return new {$arrayIteratorAlias}(\$this->headers);");
		}
	}

	private function processObjectType(string $domain, $typeSpec, bool $withBuilder = false)
	{
		$objectClassName = __NAMESPACE__ . "\\Model\\" . $domain . "\\" . $typeSpec->id;
		$objectClass = $this->addClass($objectClassName);
		$objectClass->setFinal(true);
		$objectClass->addImplement(\JsonSerializable::class);

		if (isset($typeSpec->description)) {
			$objectClass->addComment($typeSpec->description);
		} else {
			$objectClass->addComment("Named type {$domain}.{$typeSpec->id}.");
		}

		$objectClass->addComment("")
			->addComment(static::GENERATED_COMMENT)
			->addComment("")
			->addComment(static::AUTHOR_COMMENT);

		$fromJson = $objectClass->addMethod("fromJson");
		$fromJson->setStatic(true);
		$fromJson->addParameter("data");
		$fromJson->addBody("\$instance = new static();");
		$fromJson->addComment("@param object \$data");
		$fromJson->addComment("@return static");

		$jsonSerialize = $objectClass->addMethod("jsonSerialize");
		$jsonSerialize->addBody("\$data = new \\stdClass();");

		$builderClass = null;
		$buildMethod = null;
		if ($withBuilder) {
			$builderClassName = __NAMESPACE__ . "\\Model\\" . $domain . "\\" . $typeSpec->id . "Builder";

			$objectClass->getNamespace()->addUse($builderClassName);
			$builderAlias = Helpers::extractShortName($builderClassName);
			$builder = $objectClass->addMethod("builder");
			$builder
				->addComment("Create new instance using builder.")
				->addComment("")
				->addComment("@return {$builderAlias}");
			$builder->setVisibility("public");
			$builder->setStatic(true);
			$builder->setReturnType($builderClassName);
			$builder->addBody("return new {$builderAlias}();");

			$allPropertiesOptional = true;
			foreach ($typeSpec->properties ?? [] as $propertySpec) {
				$allPropertiesOptional = $allPropertiesOptional && ($propertySpec->optional ?? false);
				if (!$allPropertiesOptional) {
					break;
				}
			}

			if ($allPropertiesOptional) {
				$makeMethod = $objectClass->addMethod("make");
				$makeMethod
					->addComment("Create new empty instance.")
					->addComment("")
					->addComment("@return self");
				$makeMethod->setVisibility("public");
				$makeMethod->setStatic(true);
				$makeMethod->setReturnType("self");
				$makeMethod->addBody("return static::builder()->build();");
			}

			$builderClass = $this->addClass($builderClassName);
			$builderClass->setFinal(true);
			$builderClass
				->addComment(static::GENERATED_COMMENT)
				->addComment("")
				->addComment(static::AUTHOR_COMMENT);

			$buildMethod = $builderClass->addMethod("build");
			$buildMethod->addComment("Validate non-optional parameters and return new instance.");
			$buildMethod->setVisibility("public");
			$buildMethod->setReturnType($objectClassName);
			$builderClass->getNamespace()->addUse($objectClassName);
			$objectAlias = Helpers::extractShortName($objectClassName);
			$buildMethod->addBody("\$instance = new {$objectAlias}();");
		}

		foreach ($typeSpec->properties ?? [] as $propertySpec) {
			$property = $objectClass->addProperty($propertySpec->name);
			$property->setVisibility("public");
			if (isset($propertySpec->description)) {
				$property->addComment($propertySpec->description);
			}

			if ($property->getComment()) {
				$property->addComment("");
			}

			$property->addComment("@var " . $this->formatDocCommentTypeHint($objectClass, $domain, $propertySpec));

			$this->processObjectFromToJson($objectClass, $domain, $propertySpec, $fromJson, $jsonSerialize);

			if ($withBuilder) {
				$builderClass->addProperty($propertySpec->name)->setVisibility("private");

				$setter = $builderClass->addMethod("set" . Util::upperFirst($propertySpec->name));
				$setter
					->addComment("@param " . $this->formatDocCommentTypeHint($builderClass, $domain, $propertySpec) . " \${$propertySpec->name}")
					->addComment("")
					->addComment("@return self");
				$setter->setReturnType("self");
				$setter->addParameter($propertySpec->name);
				$setter
					->addBody("\$this->{$propertySpec->name} = \${$propertySpec->name};")
					->addBody("return \$this;");

				if (!($propertySpec->optional ?? false)) {
					$builderClass->getNamespace()->addUse(BuilderException::class);
					$builderExceptionAlias = Helpers::extractShortName(BuilderException::class);
					$buildMethod
						->addBody("if (\$this->{$propertySpec->name} === null) {")
						->addBody("\tthrow new {$builderExceptionAlias}(" . var_export(sprintf("Property [%s] is required.", $propertySpec->name), true) . ");")
						->addBody("}");
				}
				$buildMethod->addBody("\$instance->{$propertySpec->name} = \$this->{$propertySpec->name};");
			}
		}

		$fromJson->addBody("return \$instance;");

		$jsonSerialize->addBody("return \$data;");

		if ($withBuilder) {
			$buildMethod->addBody("return \$instance;");
		}

		return $objectClass;
	}

	private function formatDocCommentTypeHint(ClassType $objectClass, string $domain, $propertySpec)
	{
		switch ($propertySpec->type ?? null) {
			case "any":
				return "mixed" . (($propertySpec->optional ?? false) ? "|null" : "");
			case "string":
				return "string" . (($propertySpec->optional ?? false) ? "|null" : "");
			case "boolean":
				return "bool" . (($propertySpec->optional ?? false) ? "|null" : "");
			case "number":
				return "int|float" . (($propertySpec->optional ?? false) ? "|null" : "");
			case "integer":
				return "int" . (($propertySpec->optional ?? false) ? "|null" : "");
			case "array":
				$baseType = $this->formatDocCommentTypeHint($objectClass, $domain, $propertySpec->items);

				return implode("|", array_map(function ($t) {
						return $t . "[]";
					}, explode("|", $baseType))) .
					(($propertySpec->optional ?? false) ? "|null" : "");
			case "object":
				return "object" . (($propertySpec->optional ?? false) ? "|null" : "");
			case '$ref':
				// fallthrough
			case null:
				if (isset($propertySpec->{'$ref'})) {
					$namedTypeSpec = $this->refNamedType($domain, $propertySpec->{'$ref'});
					if (in_array($namedTypeSpec->type, ["string", "boolean", "number", "integer", "array"], true)) {
						return $this->formatDocCommentTypeHint($objectClass, $domain, $namedTypeSpec);
					} else if ($namedTypeSpec->type === "object") {
						$namedClassName = __NAMESPACE__ . "\\Model\\" . $namedTypeSpec->domain . "\\" . $namedTypeSpec->id;
						$namedClassAlias = Helpers::extractShortName($namedClassName);
						if ($namedClassName !== ($objectClass->getNamespace()->getName() . '\\' . $objectClass->getName())) {
							$objectClass->getNamespace()->addUse($namedClassName, $namedClassAlias);
						}
						return $namedClassAlias . (($propertySpec->optional ?? false) ? "|null" : "");
					}
				}
				// fallthrough
			default:
				throw new \LogicException(sprintf(
					"Unhandled property spec type [%s] for [%s\\%s::\$%s].",
					$propertySpec->type,
					$objectClass->getNamespace()->getName(),
					$objectClass->getName(),
					$propertySpec->name
				));
		}
	}

	private function processObjectFromToJson(ClassType $objectClass, string $domain, $propertySpec, Method $fromJson, Method $jsonSerialize)
	{
		switch ($propertySpec->type ?? null) {
			case "any":
			case "number":
			case "object":
				$typeCast = "";
			case "string":
				if (!isset($typeCast)) {
					$typeCast = "(string)";
				}
			case "boolean":
				if (!isset($typeCast)) {
					$typeCast = "(bool)";
				}
			case "integer":
				if (!isset($typeCast)) {
					$typeCast = "(int)";
				}

				$fromJson
					->addBody("if (isset(\$data->{$propertySpec->name})) {")
					->addBody("\t\$instance->{$propertySpec->name} = {$typeCast}\$data->{$propertySpec->name};")
					->addBody("}");

				$jsonSerialize
					->addBody("if (\$this->{$propertySpec->name} !== null) {")
					->addBody("\t\$data->{$propertySpec->name} = \$this->{$propertySpec->name};")
					->addBody("}");
				break;

			case "array":
				$fromJson
					->addBody("if (isset(\$data->{$propertySpec->name})) {")
					->addBody("\t\$instance->{$propertySpec->name} = [];");
				$jsonSerialize
					->addBody("if (\$this->{$propertySpec->name} !== null) {")
					->addBody("\t\$data->{$propertySpec->name} = [];");

				switch ($propertySpec->items->type ?? null) {
					case "any":
					case "number":
					case "object":
						$itemTypeCast = "";
					case "string":
						if (!isset($itemTypeCast)) {
							$itemTypeCast = "(string)";
						}
					case "boolean":
						if (!isset($itemTypeCast)) {
							$itemTypeCast = "(bool)";
						}
					case "integer":
						if (!isset($itemTypeCast)) {
							$itemTypeCast = "(int)";
						}

						$fromJson
							->addBody("\tforeach (\$data->{$propertySpec->name} as \$item) {")
							->addBody("\t\t\$instance->{$propertySpec->name}[] = {$itemTypeCast}\$item;")
							->addBody("\t}");

						$jsonSerialize
							->addBody("\tforeach (\$this->{$propertySpec->name} as \$item) {")
							->addBody("\t\t\$data->{$propertySpec->name}[] = \$item;")
							->addBody("\t}");
						break;

					case "array":
						$fromJson
							->addBody("\tforeach (\$data->{$propertySpec->name} as \$item) {")
							->addBody("\t\t\$nested = [];");
						$jsonSerialize
							->addBody("\tforeach (\$this->{$propertySpec->name} as \$item) {")
							->addBody("\t\t\$nested = [];");

						$nestedItems = $propertySpec->items->items;
						if (isset($nestedItems->{'$ref'})) {
							$nestedItems = $this->refNamedType($domain, $nestedItems->{'$ref'});
						}

						switch ($nestedItems->type ?? null) {
							case "any":
							case "number":
							case "object":
								$itemTypeCast = "";
							case "string":
								if (!isset($itemTypeCast)) {
									$itemTypeCast = "(string)";
								}
							case "boolean":
								if (!isset($itemTypeCast)) {
									$itemTypeCast = "(bool)";
								}
							case "integer":
								if (!isset($itemTypeCast)) {
									$itemTypeCast = "(int)";
								}

								$fromJson
									->addBody("\t\tforeach (\$item as \$nestedItem) {")
									->addBody("\t\t\t\$nested[] = {$itemTypeCast}\$nestedItem;")
									->addBody("\t\t}");

								$jsonSerialize
									->addBody("\t\tforeach (\$item as \$nestedItem) {")
									->addBody("\t\t\t\$nested[] = \$nestedItem;")
									->addBody("\t\t}");
								break;

							default:
								throw new \LogicException(sprintf(
									"Unhandled nested item property spec type [%s] for [%s\\%s::\$%s].",
									$propertySpec->items->items->type,
									$objectClass->getNamespace()->getName(),
									$objectClass->getName(),
									$propertySpec->name
								));
						}

						$fromJson
							->addBody("\t\t\$instance->{$propertySpec->name}[] = \$nested;")
							->addBody("\t}");
						$jsonSerialize
							->addBody("\t\t\$data->{$propertySpec->name}[] = \$nested;")
							->addBody("\t}");

						break;

					case '$ref':
						// fallthrough
					case null:
						if (isset($propertySpec->items->{'$ref'})) {
							$namedTypeSpec = $this->refNamedType($domain, $propertySpec->items->{'$ref'});
							if (in_array($namedTypeSpec->type, ["string", "boolean", "number", "integer", "array"], true)) {
								$newPropertySpec = clone $propertySpec;
								$newPropertySpec->items->type = $namedTypeSpec->type;
								if (isset($namedTypeSpec->items)) {
									$newPropertySpec->items->items = $namedTypeSpec->items;
								}
								unset($newPropertySpec->items->{'$ref'});
								$this->processObjectFromToJson($objectClass, $domain, $newPropertySpec, $fromJson, $jsonSerialize);
								break;
							} else if ($namedTypeSpec->type === "object") {
								$namedClassName = __NAMESPACE__ . "\\Model\\" . $namedTypeSpec->domain . "\\" . $namedTypeSpec->id;
								$namedClassAlias = Helpers::extractShortName($namedClassName);
								if ($namedClassName !== ($objectClass->getNamespace()->getName() . '\\' . $objectClass->getName())) {
									$objectClass->getNamespace()->addUse($namedClassName, $namedClassAlias);
								}

								$fromJson
									->addBody("\tforeach (\$data->{$propertySpec->name} as \$item) {")
									->addBody("\t\t\$instance->{$propertySpec->name}[] = {$namedClassAlias}::fromJson(\$item);")
									->addBody("\t}");

								$jsonSerialize
									->addBody("\tforeach (\$this->{$propertySpec->name} as \$item) {")
									->addBody("\t\t\$data->{$propertySpec->name}[] = \$item->jsonSerialize();")
									->addBody("\t}");

								break;
							}
						}
						// fallthrough
					default:
						throw new \LogicException(sprintf(
							"Unhandled item property spec type [%s] for [%s\\%s::\$%s].",
							$propertySpec->items->type,
							$objectClass->getNamespace()->getName(),
							$objectClass->getName(),
							$propertySpec->name
						));
				}

				$fromJson->addBody("}");
				$jsonSerialize->addBody("}");

				break;

			case '$ref':
				// fallthrough
			case null:
				if (isset($propertySpec->{'$ref'})) {
					$namedTypeSpec = $this->refNamedType($domain, $propertySpec->{'$ref'});
					if (in_array($namedTypeSpec->type, ["string", "boolean", "number", "integer", "array"], true)) {
						$newPropertySpec = clone $propertySpec;
						$newPropertySpec->type = $namedTypeSpec->type;
						if (isset($namedTypeSpec->items)) {
							$newPropertySpec->items = $namedTypeSpec->items;
						}
						unset($newPropertySpec->{'$ref'});
						$this->processObjectFromToJson($objectClass, $domain, $newPropertySpec, $fromJson, $jsonSerialize);
						break;
					} else if ($namedTypeSpec->type === "object") {
						$namedClassName = __NAMESPACE__ . "\\Model\\" . $namedTypeSpec->domain . "\\" . $namedTypeSpec->id;
						$namedClassAlias = Helpers::extractShortName($namedClassName);
						if ($namedClassName !== ($objectClass->getNamespace()->getName() . '\\' . $objectClass->getName())) {
							$objectClass->getNamespace()->addUse($namedClassName, $namedClassAlias);
						}

						$fromJson
							->addBody("if (isset(\$data->{$propertySpec->name})) {")
							->addBody("\t\$instance->{$propertySpec->name} = {$namedClassAlias}::fromJson(\$data->{$propertySpec->name});")
							->addBody("}");
						$jsonSerialize
							->addBody("if (\$this->{$propertySpec->name} !== null) {")
							->addBody("\t\$data->{$propertySpec->name} = \$this->{$propertySpec->name}->jsonSerialize();")
							->addBody("}");
						break;
					}
				}
				// fallthrough
			default:
				throw new \LogicException(sprintf(
					"Unhandled property spec type [%s] for [%s\\%s::\$%s].",
					$propertySpec->type,
					$objectClass->getNamespace()->getName(),
					$objectClass->getName(),
					$propertySpec->name
				));
		}
	}

	private function refNamedType(string $domain, string $ref)
	{
		if (strpos($ref, ".") === false) {
			$ref = $domain . "." . $ref;
		}

		if (!isset($this->namedTypes[$ref])) {
			throw new \LogicException(sprintf("Named type [%s] does not exist.", $ref));
		}

		return $this->namedTypes[$ref];
	}

	public function dump(string $dir)
	{
		foreach ($this->phpFiles as $typeName => $phpFile) {
			$fileName = $dir . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $typeName) . ".php";
			$contents = (string)$phpFile;

			$this->log("Generated type [%s].", $typeName);

			if (!file_exists($fileName) || md5_file($fileName) !== md5($contents)) {
				$this->fs->dumpFile($fileName, $contents);
				$this->log("Written type [%s].", $typeName);
			}
		}
	}

	private function log($fmt, ...$args)
	{
		fprintf(STDERR, "[%s] %s\n", date("Y-m-d H:i:s"), vsprintf($fmt, $args));
	}

}

$generator = new Generator();
$generator->process(json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "protocol.json")));
$generator->dump(__DIR__ . DIRECTORY_SEPARATOR . "gen-src");
