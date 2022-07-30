<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.autoAttachRelated command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AutoAttachRelatedRequest implements \JsonSerializable
{
	/** @var string */
	public $targetId;

	/**
	 * Whether to pause new targets when attaching to them. Use `Runtime.runIfWaitingForDebugger` to run paused targets.
	 *
	 * @var bool
	 */
	public $waitForDebuggerOnStart;

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
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		if (isset($data->waitForDebuggerOnStart)) {
			$instance->waitForDebuggerOnStart = (bool)$data->waitForDebuggerOnStart;
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
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		if ($this->waitForDebuggerOnStart !== null) {
			$data->waitForDebuggerOnStart = $this->waitForDebuggerOnStart;
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
	 * @return AutoAttachRelatedRequestBuilder
	 */
	public static function builder(): AutoAttachRelatedRequestBuilder
	{
		return new AutoAttachRelatedRequestBuilder();
	}
}
