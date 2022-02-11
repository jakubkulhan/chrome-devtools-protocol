<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.getBackgroundColors command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetBackgroundColorsRequest implements \JsonSerializable
{
	/**
	 * Id of the node to get background colors for.
	 *
	 * @var int
	 */
	public $nodeId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetBackgroundColorsRequestBuilder
	 */
	public static function builder(): GetBackgroundColorsRequestBuilder
	{
		return new GetBackgroundColorsRequestBuilder();
	}
}
