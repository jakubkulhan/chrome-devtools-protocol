<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * The loadComplete event mirrors the load complete event sent by the browser to assistive technology when the web page has finished loading.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadCompleteEvent implements \JsonSerializable
{
	/**
	 * New document root node.
	 *
	 * @var AXNode
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
			$instance->root = AXNode::fromJson($data->root);
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
