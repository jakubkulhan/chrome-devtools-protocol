<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getNodeForLocation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetNodeForLocationRequest implements \JsonSerializable
{
	/**
	 * X coordinate.
	 *
	 * @var int
	 */
	public $x;

	/**
	 * Y coordinate.
	 *
	 * @var int
	 */
	public $y;

	/**
	 * False to skip to the nearest non-UA shadow root ancestor (default: false).
	 *
	 * @var bool|null
	 */
	public $includeUserAgentShadowDOM;

	/**
	 * Whether to ignore pointer-events: none on elements and hit test them.
	 *
	 * @var bool|null
	 */
	public $ignorePointerEventsNone;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->x)) {
			$instance->x = (int)$data->x;
		}
		if (isset($data->y)) {
			$instance->y = (int)$data->y;
		}
		if (isset($data->includeUserAgentShadowDOM)) {
			$instance->includeUserAgentShadowDOM = (bool)$data->includeUserAgentShadowDOM;
		}
		if (isset($data->ignorePointerEventsNone)) {
			$instance->ignorePointerEventsNone = (bool)$data->ignorePointerEventsNone;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->x !== null) {
			$data->x = $this->x;
		}
		if ($this->y !== null) {
			$data->y = $this->y;
		}
		if ($this->includeUserAgentShadowDOM !== null) {
			$data->includeUserAgentShadowDOM = $this->includeUserAgentShadowDOM;
		}
		if ($this->ignorePointerEventsNone !== null) {
			$data->ignorePointerEventsNone = $this->ignorePointerEventsNone;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetNodeForLocationRequestBuilder
	 */
	public static function builder(): GetNodeForLocationRequestBuilder
	{
		return new GetNodeForLocationRequestBuilder();
	}
}
