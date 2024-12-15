<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.forceStartingStyle command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ForceStartingStyleRequest implements \JsonSerializable
{
	/**
	 * The element id for which to force the starting-style state.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Boolean indicating if this is on or off.
	 *
	 * @var bool
	 */
	public $forced;


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
		if (isset($data->forced)) {
			$instance->forced = (bool)$data->forced;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->forced !== null) {
			$data->forced = $this->forced;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ForceStartingStyleRequestBuilder
	 */
	public static function builder(): ForceStartingStyleRequestBuilder
	{
		return new ForceStartingStyleRequestBuilder();
	}
}
