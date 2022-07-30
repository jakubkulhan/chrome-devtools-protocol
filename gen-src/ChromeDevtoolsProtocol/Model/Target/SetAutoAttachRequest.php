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
	 * Whether to pause new targets when attaching to them. Use `Runtime.runIfWaitingForDebugger` to run paused targets.
	 *
	 * @var bool
	 */
	public $waitForDebuggerOnStart;

	/**
	 * Enables "flat" access to the session via specifying sessionId attribute in the commands. We plan to make this the default, deprecate non-flattened mode, and eventually retire it. See crbug.com/991325.
	 *
	 * @var bool|null
	 */
	public $flatten;

	/**
	 * Only targets matching filter will be attached.
	 *
	 * @var FilterEntry[]
	 */
	public $filter;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->autoAttach)) {
			$instance->autoAttach = (bool)$data->autoAttach;
		}
		if (isset($data->waitForDebuggerOnStart)) {
			$instance->waitForDebuggerOnStart = (bool)$data->waitForDebuggerOnStart;
		}
		if (isset($data->flatten)) {
			$instance->flatten = (bool)$data->flatten;
		}
		if (isset($data->filter)) {
			$instance->filter = [];
			foreach ($data->filter as $item) {
				$instance->filter[] = FilterEntry::fromJson($item);
			}
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
		if ($this->flatten !== null) {
			$data->flatten = $this->flatten;
		}
		if ($this->filter !== null) {
			$data->filter = [];
			foreach ($this->filter as $item) {
				$data->filter[] = $item->jsonSerialize();
			}
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
