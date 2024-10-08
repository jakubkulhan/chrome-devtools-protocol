<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Response to Runtime.compileScript command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CompileScriptResponse implements \JsonSerializable
{
	/**
	 * Id of the script.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * Exception details.
	 *
	 * @var ExceptionDetails|null
	 */
	public $exceptionDetails;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->exceptionDetails)) {
			$instance->exceptionDetails = ExceptionDetails::fromJson($data->exceptionDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->exceptionDetails !== null) {
			$data->exceptionDetails = $this->exceptionDetails->jsonSerialize();
		}
		return $data;
	}
}
