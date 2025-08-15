<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Response to Emulation.getScreenInfos command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetScreenInfosResponse implements \JsonSerializable
{
	/** @var ScreenInfo[] */
	public $screenInfos;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->screenInfos)) {
			$instance->screenInfos = [];
			foreach ($data->screenInfos as $item) {
				$instance->screenInfos[] = ScreenInfo::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->screenInfos !== null) {
			$data->screenInfos = [];
			foreach ($this->screenInfos as $item) {
				$data->screenInfos[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
