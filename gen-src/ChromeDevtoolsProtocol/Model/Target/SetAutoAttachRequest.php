<?php
namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.setAutoAttach command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAutoAttachRequest implements \JsonSerializable
{
	/**
	 * Whether to auto-attach to related targets.
	 *
	 * @var bool
	 */
	public $autoAttach;

	/**
	 * Whether to pause new targets when attaching to them. Use <code>Runtime.runIfWaitingForDebugger</code> to run paused targets.
	 *
	 * @var bool
	 */
	public $waitForDebuggerOnStart;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->autoAttach)) {
			$instance->autoAttach = (bool)$data->autoAttach;
		}
		if (isset($data->waitForDebuggerOnStart)) {
			$instance->waitForDebuggerOnStart = (bool)$data->waitForDebuggerOnStart;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->autoAttach !== null) {
			$data->autoAttach = $this->autoAttach;
		}
		if ($this->waitForDebuggerOnStart !== null) {
			$data->waitForDebuggerOnStart = $this->waitForDebuggerOnStart;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAutoAttachRequestBuilder
	 */
	public static function builder(): SetAutoAttachRequestBuilder
	{
		return new SetAutoAttachRequestBuilder();
	}
}
