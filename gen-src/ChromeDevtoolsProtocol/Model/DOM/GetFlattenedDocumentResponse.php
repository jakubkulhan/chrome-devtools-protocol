<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getFlattenedDocument command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFlattenedDocumentResponse implements \JsonSerializable
{
	/**
	 * Resulting node.
	 *
	 * @var Node[]
	 */
	public $nodes;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodes)) {
			$instance->nodes = [];
			foreach ($data->nodes as $item) {
				$instance->nodes[] = Node::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->nodes !== null) {
			$data->nodes = [];
			foreach ($this->nodes as $item) {
				$data->nodes[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
