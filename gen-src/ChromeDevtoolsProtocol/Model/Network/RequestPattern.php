<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request pattern for interception.
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
	public $interceptionStage;


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
		if (isset($data->interceptionStage)) {
			$instance->interceptionStage = (string)$data->interceptionStage;
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
		if ($this->interceptionStage !== null) {
			$data->interceptionStage = $this->interceptionStage;
		}
		return $data;
	}
}
