<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Named type Fetch.RequestPattern.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestPattern implements \JsonSerializable
{
	/**
	 * Wildcards (`'*'` -> zero or more, `'?'` -> exactly one) are allowed. Escape character is backslash. Omitting is equivalent to `"*"`.
	 *
	 * @var string|null
	 */
	public $urlPattern;

	/**
	 * If set, only requests for matching resource types will be intercepted.
	 *
	 * @var string
	 */
	public $resourceType;

	/**
	 * Stage at which to begin intercepting requests. Default is Request.
	 *
	 * @var string
	 */
	public $requestStage;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->urlPattern)) {
			$instance->urlPattern = (string)$data->urlPattern;
		}
		if (isset($data->resourceType)) {
			$instance->resourceType = (string)$data->resourceType;
		}
		if (isset($data->requestStage)) {
			$instance->requestStage = (string)$data->requestStage;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->urlPattern !== null) {
			$data->urlPattern = $this->urlPattern;
		}
		if ($this->resourceType !== null) {
			$data->resourceType = $this->resourceType;
		}
		if ($this->requestStage !== null) {
			$data->requestStage = $this->requestStage;
		}
		return $data;
	}
}
