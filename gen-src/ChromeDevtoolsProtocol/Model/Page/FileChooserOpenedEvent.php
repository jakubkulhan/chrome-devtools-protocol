<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Emitted only when `page.interceptFileChooser` is enabled.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FileChooserOpenedEvent implements \JsonSerializable
{
	/** @var string */
	public $mode;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->mode)) {
			$instance->mode = (string)$data->mode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->mode !== null) {
			$data->mode = $this->mode;
		}
		return $data;
	}
}
