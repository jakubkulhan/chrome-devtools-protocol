<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.ShareTarget.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ShareTarget implements \JsonSerializable
{
	/** @var string */
	public $action;

	/** @var string */
	public $method;

	/** @var string */
	public $enctype;

	/**
	 * Embed the ShareTargetParams
	 *
	 * @var string|null
	 */
	public $title;

	/** @var string|null */
	public $text;

	/** @var string|null */
	public $url;

	/** @var FileFilter[]|null */
	public $files;


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
		if (isset($data->method)) {
			$instance->method = (string)$data->method;
		}
		if (isset($data->enctype)) {
			$instance->enctype = (string)$data->enctype;
		}
		if (isset($data->title)) {
			$instance->title = (string)$data->title;
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->files)) {
			$instance->files = [];
			foreach ($data->files as $item) {
				$instance->files[] = FileFilter::fromJson($item);
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
		if ($this->method !== null) {
			$data->method = $this->method;
		}
		if ($this->enctype !== null) {
			$data->enctype = $this->enctype;
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->files !== null) {
			$data->files = [];
			foreach ($this->files as $item) {
				$data->files[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
