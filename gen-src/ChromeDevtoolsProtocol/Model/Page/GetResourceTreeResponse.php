<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getResourceTree command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetResourceTreeResponse implements \JsonSerializable
{
	/**
	 * Present frame / resource tree structure.
	 *
	 * @var FrameResourceTree
	 */
	public $frameTree;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameTree)) {
			$instance->frameTree = FrameResourceTree::fromJson($data->frameTree);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameTree !== null) {
			$data->frameTree = $this->frameTree->jsonSerialize();
		}
		return $data;
	}
}
