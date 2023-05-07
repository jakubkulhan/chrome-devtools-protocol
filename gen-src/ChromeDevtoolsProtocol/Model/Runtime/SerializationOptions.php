<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Represents options for serialization. Overrides `generatePreview`, `returnByValue` and `generateWebDriverValue`.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SerializationOptions implements \JsonSerializable
{
	/** @var string */
	public $serialization;

	/**
	 * Deep serialization depth. Default is full depth. Respected only in `deep` serialization mode.
	 *
	 * @var int|null
	 */
	public $maxDepth;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->serialization)) {
			$instance->serialization = (string)$data->serialization;
		}
		if (isset($data->maxDepth)) {
			$instance->maxDepth = (int)$data->maxDepth;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->serialization !== null) {
			$data->serialization = $this->serialization;
		}
		if ($this->maxDepth !== null) {
			$data->maxDepth = $this->maxDepth;
		}
		return $data;
	}
}
