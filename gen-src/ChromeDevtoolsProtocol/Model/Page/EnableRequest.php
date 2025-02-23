<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequest implements \JsonSerializable
{
	/**
	 * If true, the `Page.fileChooserOpened` event will be emitted regardless of the state set by `Page.setInterceptFileChooserDialog` command (default: false).
	 *
	 * @var bool|null
	 */
	public $enableFileChooserOpenedEvent;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enableFileChooserOpenedEvent)) {
			$instance->enableFileChooserOpenedEvent = (bool)$data->enableFileChooserOpenedEvent;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enableFileChooserOpenedEvent !== null) {
			$data->enableFileChooserOpenedEvent = $this->enableFileChooserOpenedEvent;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EnableRequestBuilder
	 */
	public static function builder(): EnableRequestBuilder
	{
		return new EnableRequestBuilder();
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
