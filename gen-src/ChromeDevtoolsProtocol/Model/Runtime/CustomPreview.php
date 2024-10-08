<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Named type Runtime.CustomPreview.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CustomPreview implements \JsonSerializable
{
	/**
	 * The JSON-stringified result of formatter.header(object, config) call. It contains json ML array that represents RemoteObject.
	 *
	 * @var string
	 */
	public $header;

	/**
	 * If formatter returns true as a result of formatter.hasBody call then bodyGetterId will contain RemoteObjectId for the function that returns result of formatter.body(object, config) call. The result value is json ML array.
	 *
	 * @var string
	 */
	public $bodyGetterId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->header)) {
			$instance->header = (string)$data->header;
		}
		if (isset($data->bodyGetterId)) {
			$instance->bodyGetterId = (string)$data->bodyGetterId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->header !== null) {
			$data->header = $this->header;
		}
		if ($this->bodyGetterId !== null) {
			$data->bodyGetterId = $this->bodyGetterId;
		}
		return $data;
	}
}
