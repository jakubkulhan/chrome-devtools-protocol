<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getDocument command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDocumentResponse implements \JsonSerializable
{
	/**
	 * Resulting node.
	 *
	 * @var Node
	 */
	public $root;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->root)) {
			$instance->root = Node::fromJson($data->root);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->root !== null) {
			$data->root = $this->root->jsonSerialize();
		}
		return $data;
	}
}
