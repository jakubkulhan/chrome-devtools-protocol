<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when a JavaScript initiated dialog (alert, confirm, prompt, or onbeforeunload) has been closed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class JavascriptDialogClosedEvent implements \JsonSerializable
{
	/**
	 * Whether dialog was confirmed.
	 *
	 * @var bool
	 */
	public $result;

	/**
	 * User input in case of prompt.
	 *
	 * @var string
	 */
	public $userInput;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->result)) {
			$instance->result = (bool)$data->result;
		}
		if (isset($data->userInput)) {
			$instance->userInput = (string)$data->userInput;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->result !== null) {
			$data->result = $this->result;
		}
		if ($this->userInput !== null) {
			$data->userInput = $this->userInput;
		}
		return $data;
	}
}
