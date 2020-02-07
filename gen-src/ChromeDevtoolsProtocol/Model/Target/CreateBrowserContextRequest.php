<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.createBrowserContext command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateBrowserContextRequest implements \JsonSerializable
{
	/**
	 * If specified, disposes this context when debugging session disconnects.
	 *
	 * @var bool|null
	 */
	public $disposeOnDetach;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->disposeOnDetach)) {
			$instance->disposeOnDetach = (bool)$data->disposeOnDetach;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->disposeOnDetach !== null) {
			$data->disposeOnDetach = $this->disposeOnDetach;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CreateBrowserContextRequestBuilder
	 */
	public static function builder(): CreateBrowserContextRequestBuilder
	{
		return new CreateBrowserContextRequestBuilder();
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
