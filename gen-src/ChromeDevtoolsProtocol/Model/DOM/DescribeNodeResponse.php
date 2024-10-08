<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.describeNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DescribeNodeResponse implements \JsonSerializable
{
	/**
	 * Node description.
	 *
	 * @var Node
	 */
	public $node;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->node)) {
			$instance->node = Node::fromJson($data->node);
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
