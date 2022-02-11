<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setScrollbarsHidden command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetScrollbarsHiddenRequest implements \JsonSerializable
{
	/**
	 * Whether scrollbars should be always hidden.
	 *
	 * @var bool
	 */
	public $hidden;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->hidden)) {
			$instance->hidden = (bool)$data->hidden;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->hidden !== null) {
			$data->hidden = $this->hidden;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetScrollbarsHiddenRequestBuilder
	 */
	public static function builder(): SetScrollbarsHiddenRequestBuilder
	{
		return new SetScrollbarsHiddenRequestBuilder();
	}
}
