<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Depending on the concrete errorType, different properties are set.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GenericIssueDetails implements \JsonSerializable
{
	/**
	 * Issues with the same errorType are aggregated in the frontend.
	 *
	 * @var string
	 */
	public $errorType;

	/** @var string */
	public $frameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->errorType)) {
			$instance->errorType = (string)$data->errorType;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->errorType !== null) {
			$data->errorType = $this->errorType;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}
}
