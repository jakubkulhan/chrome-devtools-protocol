<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getAppManifest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAppManifestResponse implements \JsonSerializable
{
	/**
	 * Manifest location.
	 *
	 * @var string
	 */
	public $url;

	/** @var AppManifestError[] */
	public $errors;

	/**
	 * Manifest content.
	 *
	 * @var string|null
	 */
	public $data;

	/**
	 * Parsed manifest properties
	 *
	 * @var AppManifestParsedProperties|null
	 */
	public $parsed;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->errors)) {
			$instance->errors = [];
			foreach ($data->errors as $item) {
				$instance->errors[] = AppManifestError::fromJson($item);
			}
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		if (isset($data->parsed)) {
			$instance->parsed = AppManifestParsedProperties::fromJson($data->parsed);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->errors !== null) {
			$data->errors = [];
			foreach ($this->errors as $item) {
				$data->errors[] = $item->jsonSerialize();
			}
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		if ($this->parsed !== null) {
			$data->parsed = $this->parsed->jsonSerialize();
		}
		return $data;
	}
}
