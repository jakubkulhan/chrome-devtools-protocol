<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.setInspectedNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInspectedNodeRequest implements \JsonSerializable
{
	/**
	 * DOM node id to be accessible by means of $x command line API.
	 *
	 * @var int
	 */
	public $nodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetInspectedNodeRequestBuilder
	 */
	public static function builder(): SetInspectedNodeRequestBuilder
	{
		return new SetInspectedNodeRequestBuilder();
	}
}
