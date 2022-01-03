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


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
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
	 * @return SetInterceptFileChooserDialogRequestBuilder
	 */
	public static function builder(): SetInterceptFileChooserDialogRequestBuilder
	{
		return new SetInterceptFileChooserDialogRequestBuilder();
	}
}
