<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Request for ServiceWorker.setForceUpdateOnPageLoad command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetForceUpdateOnPageLoadRequest implements \JsonSerializable
{
	/** @var bool */
	public $forceUpdateOnPageLoad;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->forceUpdateOnPageLoad)) {
			$instance->forceUpdateOnPageLoad = (bool)$data->forceUpdateOnPageLoad;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->forceUpdateOnPageLoad !== null) {
			$data->forceUpdateOnPageLoad = $this->forceUpdateOnPageLoad;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetForceUpdateOnPageLoadRequestBuilder
	 */
	public static function builder(): SetForceUpdateOnPageLoadRequestBuilder
	{
		return new SetForceUpdateOnPageLoadRequestBuilder();
	}
}
