<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Response to Emulation.addScreen command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddScreenResponse implements \JsonSerializable
{
	/** @var ScreenInfo */
	public $screenInfo;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->screenInfo)) {
			$instance->screenInfo = ScreenInfo::fromJson($data->screenInfo);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->screenInfo !== null) {
			$data->screenInfo = $this->screenInfo->jsonSerialize();
		}
		return $data;
	}
}
