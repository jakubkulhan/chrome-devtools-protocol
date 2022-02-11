<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Response to LayerTree.compositingReasons command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CompositingReasonsResponse implements \JsonSerializable
{
	/**
	 * A list of strings specifying reasons for the given layer to become composited.
	 *
	 * @var string[]
	 */
	public $compositingReasons;

	/**
	 * A list of strings specifying reason IDs for the given layer to become composited.
	 *
	 * @var string[]
	 */
	public $compositingReasonIds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->compositingReasons)) {
			$instance->compositingReasons = [];
			foreach ($data->compositingReasons as $item) {
				$instance->compositingReasons[] = (string)$item;
			}
		}
		if (isset($data->compositingReasonIds)) {
			$instance->compositingReasonIds = [];
			foreach ($data->compositingReasonIds as $item) {
				$instance->compositingReasonIds[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->compositingReasons !== null) {
			$data->compositingReasons = [];
			foreach ($this->compositingReasons as $item) {
				$data->compositingReasons[] = $item;
			}
		}
		if ($this->compositingReasonIds !== null) {
			$data->compositingReasonIds = [];
			foreach ($this->compositingReasonIds as $item) {
				$data->compositingReasonIds[] = $item;
			}
		}
		return $data;
	}
}
