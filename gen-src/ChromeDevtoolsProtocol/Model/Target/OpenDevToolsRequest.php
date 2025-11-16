<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.openDevTools command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OpenDevToolsRequest implements \JsonSerializable
{
	/**
	 * This can be the page or tab target ID.
	 *
	 * @var string
	 */
	public $targetId;

	/**
	 * The id of the panel we want DevTools to open initially. Currently supported panels are elements, console, network, sources, resources and performance.
	 *
	 * @var string|null
	 */
	public $panelId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		if (isset($data->panelId)) {
			$instance->panelId = (string)$data->panelId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		if ($this->panelId !== null) {
			$data->panelId = $this->panelId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return OpenDevToolsRequestBuilder
	 */
	public static function builder(): OpenDevToolsRequestBuilder
	{
		return new OpenDevToolsRequestBuilder();
	}
}
