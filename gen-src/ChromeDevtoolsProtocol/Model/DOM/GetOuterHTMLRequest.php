<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getOuterHTML command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOuterHTMLRequest implements \JsonSerializable
{
	/**
	 * Identifier of the node.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Identifier of the backend node.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * JavaScript object id of the node wrapper.
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * Include all shadow roots. Equals to false if not specified.
	 *
	 * @var bool|null
	 */
	public $includeShadowDOM;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		if (isset($data->includeShadowDOM)) {
			$instance->includeShadowDOM = (bool)$data->includeShadowDOM;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		if ($this->includeShadowDOM !== null) {
			$data->includeShadowDOM = $this->includeShadowDOM;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetOuterHTMLRequestBuilder
	 */
	public static function builder(): GetOuterHTMLRequestBuilder
	{
		return new GetOuterHTMLRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
