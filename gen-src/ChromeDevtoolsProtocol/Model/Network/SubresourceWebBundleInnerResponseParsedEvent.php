<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when handling requests for resources within a .wbn file. Note: this will only be fired for resources that are requested by the webpage.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SubresourceWebBundleInnerResponseParsedEvent implements \JsonSerializable
{
	/**
	 * Request identifier of the subresource request
	 *
	 * @var string
	 */
	public $innerRequestId;

	/**
	 * URL of the subresource resource.
	 *
	 * @var string
	 */
	public $innerRequestURL;

	/**
	 * Bundle request identifier. Used to match this information to another event. This made be absent in case when the instrumentation was enabled only after webbundle was parsed.
	 *
	 * @var string
	 */
	public $bundleRequestId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->innerRequestId)) {
			$instance->innerRequestId = (string)$data->innerRequestId;
		}
		if (isset($data->innerRequestURL)) {
			$instance->innerRequestURL = (string)$data->innerRequestURL;
		}
		if (isset($data->bundleRequestId)) {
			$instance->bundleRequestId = (string)$data->bundleRequestId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->innerRequestId !== null) {
			$data->innerRequestId = $this->innerRequestId;
		}
		if ($this->innerRequestURL !== null) {
			$data->innerRequestURL = $this->innerRequestURL;
		}
		if ($this->bundleRequestId !== null) {
			$data->bundleRequestId = $this->bundleRequestId;
		}
		return $data;
	}
}
