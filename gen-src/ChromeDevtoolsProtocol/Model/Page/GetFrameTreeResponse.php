<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getFrameTree command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFrameTreeResponse implements \JsonSerializable
{
	/**
	 * Present frame tree structure.
	 *
	 * @var FrameTree
	 */
	public $frameTree;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameTree)) {
			$instance->frameTree = FrameTree::fromJson($data->frameTree);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->frameTree !== null) {
			$data->frameTree = $this->frameTree->jsonSerialize();
		}
		return $data;
	}
}
