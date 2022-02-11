<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.awaitPromise command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AwaitPromiseRequest implements \JsonSerializable
{
	/**
	 * Identifier of the promise.
	 *
	 * @var string
	 */
	public $promiseObjectId;

	/**
	 * Whether the result is expected to be a JSON object that should be sent by value.
	 *
	 * @var bool|null
	 */
	public $returnByValue;

	/**
	 * Whether preview should be generated for the result.
	 *
	 * @var bool|null
	 */
	public $generatePreview;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->promiseObjectId)) {
			$instance->promiseObjectId = (string)$data->promiseObjectId;
		}
		if (isset($data->returnByValue)) {
			$instance->returnByValue = (bool)$data->returnByValue;
		}
		if (isset($data->generatePreview)) {
			$instance->generatePreview = (bool)$data->generatePreview;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->promiseObjectId !== null) {
			$data->promiseObjectId = $this->promiseObjectId;
		}
		if ($this->returnByValue !== null) {
			$data->returnByValue = $this->returnByValue;
		}
		if ($this->generatePreview !== null) {
			$data->generatePreview = $this->generatePreview;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AwaitPromiseRequestBuilder
	 */
	public static function builder(): AwaitPromiseRequestBuilder
	{
		return new AwaitPromiseRequestBuilder();
	}
}
