<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.getResourceContent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetResourceContentRequest implements \JsonSerializable
{
	/**
	 * Frame id to get resource for.
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
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetResourceContentRequestBuilder
	 */
	public static function builder(): GetResourceContentRequestBuilder
	{
		return new GetResourceContentRequestBuilder();
	}
}
