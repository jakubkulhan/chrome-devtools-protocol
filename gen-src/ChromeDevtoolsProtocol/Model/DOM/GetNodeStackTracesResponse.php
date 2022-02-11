<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;

/**
 * Response to DOM.getNodeStackTraces command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetNodeStackTracesResponse implements \JsonSerializable
{
	/**
	 * Creation stack trace, if available.
	 *
	 * @var StackTrace|null
	 */
	public $creation;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->creation)) {
			$instance->creation = StackTrace::fromJson($data->creation);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->creation !== null) {
			$data->creation = $this->creation->jsonSerialize();
		}
		return $data;
	}
}
