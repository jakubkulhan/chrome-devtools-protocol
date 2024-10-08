<?php

namespace ChromeDevtoolsProtocol\Model\Cast;

/**
 * Request for Cast.startTabMirroring command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartTabMirroringRequest implements \JsonSerializable
{
	/** @var string */
	public $sinkName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sinkName)) {
			$instance->sinkName = (string)$data->sinkName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sinkName !== null) {
			$data->sinkName = $this->sinkName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StartTabMirroringRequestBuilder
	 */
	public static function builder(): StartTabMirroringRequestBuilder
	{
		return new StartTabMirroringRequestBuilder();
	}
}
