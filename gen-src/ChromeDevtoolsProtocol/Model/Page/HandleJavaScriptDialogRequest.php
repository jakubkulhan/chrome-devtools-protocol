<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.handleJavaScriptDialog command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HandleJavaScriptDialogRequest implements \JsonSerializable
{
	/**
	 * Whether to accept or dismiss the dialog.
	 *
	 * @var bool
	 */
	public $accept;

	/**
	 * The text to enter into the dialog prompt before accepting. Used only if this is a prompt dialog.
	 *
	 * @var string|null
	 */
	public $promptText;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->accept)) {
			$instance->accept = (bool)$data->accept;
		}
		if (isset($data->promptText)) {
			$instance->promptText = (string)$data->promptText;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->accept !== null) {
			$data->accept = $this->accept;
		}
		if ($this->promptText !== null) {
			$data->promptText = $this->promptText;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return HandleJavaScriptDialogRequestBuilder
	 */
	public static function builder(): HandleJavaScriptDialogRequestBuilder
	{
		return new HandleJavaScriptDialogRequestBuilder();
	}
}
