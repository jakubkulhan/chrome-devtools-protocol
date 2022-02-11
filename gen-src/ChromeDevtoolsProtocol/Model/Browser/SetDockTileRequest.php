<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.setDockTile command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDockTileRequest implements \JsonSerializable
{
	/** @var string|null */
	public $badgeLabel;

	/**
	 * Png encoded image. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $image;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->badgeLabel)) {
			$instance->badgeLabel = (string)$data->badgeLabel;
		}
		if (isset($data->image)) {
			$instance->image = (string)$data->image;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->badgeLabel !== null) {
			$data->badgeLabel = $this->badgeLabel;
		}
		if ($this->image !== null) {
			$data->image = $this->image;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDockTileRequestBuilder
	 */
	public static function builder(): SetDockTileRequestBuilder
	{
		return new SetDockTileRequestBuilder();
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
