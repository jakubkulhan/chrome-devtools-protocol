<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getFrameOwner command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFrameOwnerRequest implements \JsonSerializable
{
	/** @var string */
	public $frameId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
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
	 * @return GetFrameOwnerRequestBuilder
	 */
	public static function builder(): GetFrameOwnerRequestBuilder
	{
		return new GetFrameOwnerRequestBuilder();
	}
}
