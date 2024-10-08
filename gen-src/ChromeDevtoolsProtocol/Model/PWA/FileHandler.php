<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Named type PWA.FileHandler.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FileHandler implements \JsonSerializable
{
	/** @var string */
	public $action;

	/** @var FileHandlerAccept[] */
	public $accepts;

	/** @var string */
	public $displayName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->action)) {
			$instance->action = (string)$data->action;
		}
		if (isset($data->accepts)) {
			$instance->accepts = [];
			foreach ($data->accepts as $item) {
				$instance->accepts[] = FileHandlerAccept::fromJson($item);
			}
		}
		if (isset($data->displayName)) {
			$instance->displayName = (string)$data->displayName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->action !== null) {
			$data->action = $this->action;
		}
		if ($this->accepts !== null) {
			$data->accepts = [];
			foreach ($this->accepts as $item) {
				$data->accepts[] = $item->jsonSerialize();
			}
		}
		if ($this->displayName !== null) {
			$data->displayName = $this->displayName;
		}
		return $data;
	}
}
