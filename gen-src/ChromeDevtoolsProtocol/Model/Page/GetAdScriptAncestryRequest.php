<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.getAdScriptAncestry command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAdScriptAncestryRequest implements \JsonSerializable
{
	/** @var string */
	public $frameId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetAdScriptAncestryRequestBuilder
	 */
	public static function builder(): GetAdScriptAncestryRequestBuilder
	{
		return new GetAdScriptAncestryRequestBuilder();
	}
}
