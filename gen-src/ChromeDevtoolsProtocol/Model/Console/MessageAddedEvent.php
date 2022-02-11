<?php

namespace ChromeDevtoolsProtocol\Model\Console;

/**
 * Issued when new console message is added.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MessageAddedEvent implements \JsonSerializable
{
	/**
	 * Console message that has been added.
	 *
	 * @var ConsoleMessage
	 */
	public $message;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->message)) {
			$instance->message = ConsoleMessage::fromJson($data->message);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->message !== null) {
			$data->message = $this->message->jsonSerialize();
		}
		return $data;
	}
}
