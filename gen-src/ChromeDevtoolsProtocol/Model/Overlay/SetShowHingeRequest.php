<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowHinge command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowHingeRequest implements \JsonSerializable
{
	/**
	 * hinge data, null means hideHinge
	 *
	 * @var HingeConfig|null
	 */
	public $hingeConfig;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->hingeConfig)) {
			$instance->hingeConfig = HingeConfig::fromJson($data->hingeConfig);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->hingeConfig !== null) {
			$data->hingeConfig = $this->hingeConfig->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowHingeRequestBuilder
	 */
	public static function builder(): SetShowHingeRequestBuilder
	{
		return new SetShowHingeRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
