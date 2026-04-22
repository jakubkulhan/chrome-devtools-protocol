<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

/**
 * Event fired when tools are removed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ToolsRemovedEvent implements \JsonSerializable
{
	/**
	 * Array of tools that were removed.
	 *
	 * @var RemovedTool[]
	 */
	public $tools;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->tools)) {
			$instance->tools = [];
			foreach ($data->tools as $item) {
				$instance->tools[] = RemovedTool::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->tools !== null) {
			$data->tools = [];
			foreach ($this->tools as $item) {
				$data->tools[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
