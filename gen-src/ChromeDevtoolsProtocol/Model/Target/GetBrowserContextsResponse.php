<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Response to Target.getBrowserContexts command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetBrowserContextsResponse implements \JsonSerializable
{
	/**
	 * An array of browser context ids.
	 *
	 * @var string[]
	 */
	public $browserContextIds;

	/**
	 * The id of the default browser context if available.
	 *
	 * @var string
	 */
	public $defaultBrowserContextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->browserContextIds)) {
			$instance->browserContextIds = [];
		if (isset($data->browserContextIds)) {
			$instance->browserContextIds = [];
			foreach ($data->browserContextIds as $item) {
				$instance->browserContextIds[] = (string)$item;
			}
		}
		}
		if (isset($data->defaultBrowserContextId)) {
			$instance->defaultBrowserContextId = (string)$data->defaultBrowserContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->browserContextIds !== null) {
			$data->browserContextIds = [];
		if ($this->browserContextIds !== null) {
			$data->browserContextIds = [];
			foreach ($this->browserContextIds as $item) {
				$data->browserContextIds[] = $item;
			}
		}
		}
		if ($this->defaultBrowserContextId !== null) {
			$data->defaultBrowserContextId = $this->defaultBrowserContextId;
		}
		return $data;
	}
}
