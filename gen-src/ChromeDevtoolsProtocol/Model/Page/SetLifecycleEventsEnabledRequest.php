<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setLifecycleEventsEnabled command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetLifecycleEventsEnabledRequest implements \JsonSerializable
{
	/**
	 * If true, starts emitting lifecycle events.
	 *
	 * @var bool
	 */
	public $enabled;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetLifecycleEventsEnabledRequestBuilder
	 */
	public static function builder(): SetLifecycleEventsEnabledRequestBuilder
	{
		return new SetLifecycleEventsEnabledRequestBuilder();
	}
}
