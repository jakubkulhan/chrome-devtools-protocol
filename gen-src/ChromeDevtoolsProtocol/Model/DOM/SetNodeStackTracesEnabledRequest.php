<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.setNodeStackTracesEnabled command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetNodeStackTracesEnabledRequest implements \JsonSerializable
{
	/**
	 * Enable or disable.
	 *
	 * @var bool
	 */
	public $enable;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enable)) {
			$instance->enable = (bool)$data->enable;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enable !== null) {
			$data->enable = $this->enable;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetNodeStackTracesEnabledRequestBuilder
	 */
	public static function builder(): SetNodeStackTracesEnabledRequestBuilder
	{
		return new SetNodeStackTracesEnabledRequestBuilder();
	}
}
