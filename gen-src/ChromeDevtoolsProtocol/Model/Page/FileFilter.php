<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.FileFilter.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FileFilter implements \JsonSerializable
{
	/** @var string|null */
	public $name;

	/** @var string[]|null */
	public $accepts;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->accepts)) {
			$instance->accepts = [];
			foreach ($data->accepts as $item) {
				$instance->accepts[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->accepts !== null) {
			$data->accepts = [];
			foreach ($this->accepts as $item) {
				$data->accepts[] = $item;
			}
		}
		return $data;
	}
}
