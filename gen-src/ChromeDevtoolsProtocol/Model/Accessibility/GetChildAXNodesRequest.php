<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Request for Accessibility.getChildAXNodes command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetChildAXNodesRequest implements \JsonSerializable
{
	/** @var string */
	public $id;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetChildAXNodesRequestBuilder
	 */
	public static function builder(): GetChildAXNodesRequestBuilder
	{
		return new GetChildAXNodesRequestBuilder();
	}
}
