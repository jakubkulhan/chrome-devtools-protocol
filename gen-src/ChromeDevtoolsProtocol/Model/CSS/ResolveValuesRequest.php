<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.resolveValues command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResolveValuesRequest implements \JsonSerializable
{
	/**
	 * Substitution functions (var()/env()/attr()) and cascade-dependent keywords (revert/revert-layer) do not work.
	 *
	 * @var string[]
	 */
	public $values;

	/**
	 * Id of the node in whose context the expression is evaluated
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Only longhands and custom property names are accepted.
	 *
	 * @var string|null
	 */
	public $propertyName;

	/**
	 * Pseudo element type, only works for pseudo elements that generate elements in the tree, such as ::before and ::after.
	 *
	 * @var string
	 */
	public $pseudoType;

	/**
	 * Pseudo element custom ident.
	 *
	 * @var string|null
	 */
	public $pseudoIdentifier;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->values)) {
			$instance->values = [];
			foreach ($data->values as $item) {
				$instance->values[] = (string)$item;
			}
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->propertyName)) {
			$instance->propertyName = (string)$data->propertyName;
		}
		if (isset($data->pseudoType)) {
			$instance->pseudoType = (string)$data->pseudoType;
		}
		if (isset($data->pseudoIdentifier)) {
			$instance->pseudoIdentifier = (string)$data->pseudoIdentifier;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->values !== null) {
			$data->values = [];
			foreach ($this->values as $item) {
				$data->values[] = $item;
			}
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->propertyName !== null) {
			$data->propertyName = $this->propertyName;
		}
		if ($this->pseudoType !== null) {
			$data->pseudoType = $this->pseudoType;
		}
		if ($this->pseudoIdentifier !== null) {
			$data->pseudoIdentifier = $this->pseudoIdentifier;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ResolveValuesRequestBuilder
	 */
	public static function builder(): ResolveValuesRequestBuilder
	{
		return new ResolveValuesRequestBuilder();
	}
}
