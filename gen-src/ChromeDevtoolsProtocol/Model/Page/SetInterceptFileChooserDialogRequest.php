<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setInterceptFileChooserDialog command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInterceptFileChooserDialogRequest implements \JsonSerializable
{
	/** @var bool */
	public $enabled;

	/**
	 * If true, cancels the dialog by emitting relevant events (if any) in addition to not showing it if the interception is enabled (default: false).
	 *
	 * @var bool|null
	 */
	public $cancel;


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
		if (isset($data->cancel)) {
			$instance->cancel = (bool)$data->cancel;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		if ($this->cancel !== null) {
			$data->cancel = $this->cancel;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetInterceptFileChooserDialogRequestBuilder
	 */
	public static function builder(): SetInterceptFileChooserDialogRequestBuilder
	{
		return new SetInterceptFileChooserDialogRequestBuilder();
	}
}
