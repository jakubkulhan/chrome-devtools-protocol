<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getDetachedDomNodes command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDetachedDomNodesResponse implements \JsonSerializable
{
	/**
	 * The list of detached nodes
	 *
	 * @var DetachedElementInfo[]
	 */
	public $detachedNodes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->detachedNodes)) {
			$instance->detachedNodes = [];
			foreach ($data->detachedNodes as $item) {
				$instance->detachedNodes[] = DetachedElementInfo::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->detachedNodes !== null) {
			$data->detachedNodes = [];
			foreach ($this->detachedNodes as $item) {
				$data->detachedNodes[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
