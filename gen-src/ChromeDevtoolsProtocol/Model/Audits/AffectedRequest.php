<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Information about a request that is affected by an inspector issue.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AffectedRequest implements \JsonSerializable
{
	/**
	 * The unique request id.
	 *
	 * @var string
	 */
	public $requestId;

	/** @var string|null */
	public $url;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		return $data;
	}
}
