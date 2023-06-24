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
	 * Embedder-specific parameters. For example if connected to V8 in Chrome these control DOM serialization via `maxNodeDepth: integer` and `includeShadowTree: "none" | "open" | "all"`. Values can be only of type string or integer.
	 *
	 * @var object|null
	 */
	public $additionalParameters;


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
		if (isset($data->additionalParameters)) {
			$instance->additionalParameters = $data->additionalParameters;
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
		if ($this->additionalParameters !== null) {
			$data->additionalParameters = $this->additionalParameters;
		}
		return $data;
	}
}
