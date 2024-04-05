<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Response to PWA.getOsAppState command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOsAppStateResponse implements \JsonSerializable
{
	/** @var int */
	public $badgeCount;

	/** @var FileHandler[] */
	public $fileHandlers;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->badgeCount)) {
			$instance->badgeCount = (int)$data->badgeCount;
		}
		if (isset($data->fileHandlers)) {
			$instance->fileHandlers = [];
			foreach ($data->fileHandlers as $item) {
				$instance->fileHandlers[] = FileHandler::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->badgeCount !== null) {
			$data->badgeCount = $this->badgeCount;
		}
		if ($this->fileHandlers !== null) {
			$data->fileHandlers = [];
			foreach ($this->fileHandlers as $item) {
				$data->fileHandlers[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
