<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.disposeBrowserContext command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DisposeBrowserContextRequest implements \JsonSerializable
{
	/** @var string */
	public $browserContextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DisposeBrowserContextRequestBuilder
	 */
	public static function builder(): DisposeBrowserContextRequestBuilder
	{
		return new DisposeBrowserContextRequestBuilder();
	}
}
