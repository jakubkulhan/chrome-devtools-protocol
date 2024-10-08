<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setAcceptedEncodings command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAcceptedEncodingsRequest implements \JsonSerializable
{
	/**
	 * List of accepted content encodings.
	 *
	 * @var string[]
	 */
	public $encodings;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->encodings)) {
			$instance->encodings = [];
		if (isset($data->encodings)) {
			$instance->encodings = [];
			foreach ($data->encodings as $item) {
				$instance->encodings[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->encodings !== null) {
			$data->encodings = [];
		if ($this->encodings !== null) {
			$data->encodings = [];
			foreach ($this->encodings as $item) {
				$data->encodings[] = $item;
			}
		}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAcceptedEncodingsRequestBuilder
	 */
	public static function builder(): SetAcceptedEncodingsRequestBuilder
	{
		return new SetAcceptedEncodingsRequestBuilder();
	}
}
