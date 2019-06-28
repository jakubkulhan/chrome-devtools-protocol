<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.handleFileChooser command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HandleFileChooserRequest implements \JsonSerializable
{
	/** @var string */
	public $action;

	/**
	 * Array of absolute file paths to set, only respected with `accept` action.
	 *
	 * @var string[]|null
	 */
	public $files;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->action)) {
			$instance->action = (string)$data->action;
		}
		if (isset($data->files)) {
			$instance->files = [];
			foreach ($data->files as $item) {
				$instance->files[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->action !== null) {
			$data->action = $this->action;
		}
		if ($this->files !== null) {
			$data->files = [];
			foreach ($this->files as $item) {
				$data->files[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return HandleFileChooserRequestBuilder
	 */
	public static function builder(): HandleFileChooserRequestBuilder
	{
		return new HandleFileChooserRequestBuilder();
	}
}
