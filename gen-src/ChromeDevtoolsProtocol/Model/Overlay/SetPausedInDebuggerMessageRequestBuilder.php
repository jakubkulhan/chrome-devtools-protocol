<?php
namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPausedInDebuggerMessageRequestBuilder
{
	private $message;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPausedInDebuggerMessageRequest
	{
		$instance = new SetPausedInDebuggerMessageRequest();
		$instance->message = $this->message;
		return $instance;
	}


	/**
	 * @param string|null $message
	 *
	 * @return self
	 */
	public function setMessage($message): self
	{
		$this->message = $message;
		return $this;
	}
}
