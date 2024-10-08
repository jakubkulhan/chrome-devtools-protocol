<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.getProperties command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPropertiesRequest implements \JsonSerializable
{
	/**
	 * Identifier of the object to return properties for.
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * If true, returns properties belonging only to the element itself, not to its prototype chain.
	 *
	 * @var bool|null
	 */
	public $ownProperties;

	/**
	 * If true, returns accessor properties (with getter/setter) only; internal properties are not returned either.
	 *
	 * @var bool|null
	 */
	public $accessorPropertiesOnly;

	/**
	 * Whether preview should be generated for the results.
	 *
	 * @var bool|null
	 */
	public $generatePreview;

	/**
	 * If true, returns non-indexed properties only.
	 *
	 * @var bool|null
	 */
	public $nonIndexedPropertiesOnly;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		if (isset($data->ownProperties)) {
			$instance->ownProperties = (bool)$data->ownProperties;
		}
		if (isset($data->accessorPropertiesOnly)) {
			$instance->accessorPropertiesOnly = (bool)$data->accessorPropertiesOnly;
		}
		if (isset($data->generatePreview)) {
			$instance->generatePreview = (bool)$data->generatePreview;
		}
		if (isset($data->nonIndexedPropertiesOnly)) {
			$instance->nonIndexedPropertiesOnly = (bool)$data->nonIndexedPropertiesOnly;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		if ($this->ownProperties !== null) {
			$data->ownProperties = $this->ownProperties;
		}
		if ($this->accessorPropertiesOnly !== null) {
			$data->accessorPropertiesOnly = $this->accessorPropertiesOnly;
		}
		if ($this->generatePreview !== null) {
			$data->generatePreview = $this->generatePreview;
		}
		if ($this->nonIndexedPropertiesOnly !== null) {
			$data->nonIndexedPropertiesOnly = $this->nonIndexedPropertiesOnly;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetPropertiesRequestBuilder
	 */
	public static function builder(): GetPropertiesRequestBuilder
	{
		return new GetPropertiesRequestBuilder();
	}
}
