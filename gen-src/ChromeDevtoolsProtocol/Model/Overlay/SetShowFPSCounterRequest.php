<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowFPSCounter command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowFPSCounterRequest implements \JsonSerializable
{
	/**
	 * True for showing the FPS counter
	 *
	 * @var bool
	 */
	public $show;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->show)) {
			$instance->show = (bool)$data->show;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->show !== null) {
			$data->show = $this->show;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowFPSCounterRequestBuilder
	 */
	public static function builder(): SetShowFPSCounterRequestBuilder
	{
		return new SetShowFPSCounterRequestBuilder();
	}
}
