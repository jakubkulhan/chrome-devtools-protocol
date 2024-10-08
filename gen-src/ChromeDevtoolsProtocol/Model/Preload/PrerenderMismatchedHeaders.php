<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Information of headers to be displayed when the header mismatch occurred.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrerenderMismatchedHeaders implements \JsonSerializable
{
	/** @var string */
	public $headerName;

	/** @var string|null */
	public $initialValue;

	/** @var string|null */
	public $activationValue;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->headerName)) {
			$instance->headerName = (string)$data->headerName;
		}
		if (isset($data->initialValue)) {
			$instance->initialValue = (string)$data->initialValue;
		}
		if (isset($data->activationValue)) {
			$instance->activationValue = (string)$data->activationValue;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->headerName !== null) {
			$data->headerName = $this->headerName;
		}
		if ($this->initialValue !== null) {
			$data->initialValue = $this->initialValue;
		}
		if ($this->activationValue !== null) {
			$data->activationValue = $this->activationValue;
		}
		return $data;
	}
}
