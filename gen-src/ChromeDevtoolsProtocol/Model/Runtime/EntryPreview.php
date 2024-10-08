<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Named type Runtime.EntryPreview.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EntryPreview implements \JsonSerializable
{
	/**
	 * Preview of the key. Specified for map-like collection entries.
	 *
	 * @var ObjectPreview|null
	 */
	public $key;

	/**
	 * Preview of the value.
	 *
	 * @var ObjectPreview
	 */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = ObjectPreview::fromJson($data->key);
		}
		if (isset($data->value)) {
			$instance->value = ObjectPreview::fromJson($data->value);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key->jsonSerialize();
		}
		if ($this->value !== null) {
			$data->value = $this->value->jsonSerialize();
		}
		return $data;
	}
}
