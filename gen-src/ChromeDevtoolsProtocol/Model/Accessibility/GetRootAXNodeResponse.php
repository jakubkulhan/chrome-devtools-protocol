<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Response to Accessibility.getRootAXNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRootAXNodeResponse implements \JsonSerializable
{
	/** @var AXNode */
	public $node;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->node)) {
			$instance->node = AXNode::fromJson($data->node);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->node !== null) {
			$data->node = $this->node->jsonSerialize();
		}
		return $data;
	}
}
