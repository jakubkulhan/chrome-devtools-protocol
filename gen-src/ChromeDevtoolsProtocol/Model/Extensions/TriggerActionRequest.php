<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

/**
 * Request for Extensions.triggerAction command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TriggerActionRequest implements \JsonSerializable
{
	/**
	 * Extension id.
	 *
	 * @var string
	 */
	public $id;

	/**
	 * A tab target ID to trigger the default extension action on.
	 *
	 * @var string
	 */
	public $targetId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return TriggerActionRequestBuilder
	 */
	public static function builder(): TriggerActionRequestBuilder
	{
		return new TriggerActionRequestBuilder();
	}
}
