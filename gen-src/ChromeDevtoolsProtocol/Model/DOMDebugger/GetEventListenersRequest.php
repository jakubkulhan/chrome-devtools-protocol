<?php

namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

/**
 * Request for DOMDebugger.getEventListeners command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetEventListenersRequest implements \JsonSerializable
{
	/**
	 * Identifier of the object to return listeners for.
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * The maximum depth at which Node children should be retrieved, defaults to 1. Use -1 for the entire subtree or provide an integer larger than 0.
	 *
	 * @var int|null
	 */
	public $depth;

	/**
	 * Whether or not iframes and shadow roots should be traversed when returning the subtree (default is false). Reports listeners for all contexts if pierce is enabled.
	 *
	 * @var bool|null
	 */
	public $pierce;


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
		if (isset($data->depth)) {
			$instance->depth = (int)$data->depth;
		}
		if (isset($data->pierce)) {
			$instance->pierce = (bool)$data->pierce;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		if ($this->depth !== null) {
			$data->depth = $this->depth;
		}
		if ($this->pierce !== null) {
			$data->pierce = $this->pierce;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetEventListenersRequestBuilder
	 */
	public static function builder(): GetEventListenersRequestBuilder
	{
		return new GetEventListenersRequestBuilder();
	}
}
