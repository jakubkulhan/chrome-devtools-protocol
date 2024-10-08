<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.loadNetworkResource command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadNetworkResourceRequest implements \JsonSerializable
{
	/**
	 * Frame id to get the resource for. Mandatory for frame targets, and should be omitted for worker targets.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * URL of the resource to get content for.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Options for the request.
	 *
	 * @var LoadNetworkResourceOptions
	 */
	public $options;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->options)) {
			$instance->options = LoadNetworkResourceOptions::fromJson($data->options);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->options !== null) {
			$data->options = $this->options->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return LoadNetworkResourceRequestBuilder
	 */
	public static function builder(): LoadNetworkResourceRequestBuilder
	{
		return new LoadNetworkResourceRequestBuilder();
	}
}
