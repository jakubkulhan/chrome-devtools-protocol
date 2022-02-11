<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Information about the cached resource.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CachedResource implements \JsonSerializable
{
	/**
	 * Resource URL. This is the url of the original network request.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Type of this resource.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Cached response data.
	 *
	 * @var Response|null
	 */
	public $response;

	/**
	 * Cached response body size.
	 *
	 * @var int|float
	 */
	public $bodySize;


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
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->response)) {
			$instance->response = Response::fromJson($data->response);
		}
		if (isset($data->bodySize)) {
			$instance->bodySize = $data->bodySize;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->response !== null) {
			$data->response = $this->response->jsonSerialize();
		}
		if ($this->bodySize !== null) {
			$data->bodySize = $this->bodySize;
		}
		return $data;
	}
}
