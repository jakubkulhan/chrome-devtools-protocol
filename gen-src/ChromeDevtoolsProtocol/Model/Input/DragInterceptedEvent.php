<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Emitted only when `Input.setInterceptDrags` is enabled. Use this data with `Input.dispatchDragEvent` to restore normal drag and drop behavior.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DragInterceptedEvent implements \JsonSerializable
{
	/** @var DragData */
	public $data;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->data)) {
			$instance->data = DragData::fromJson($data->data);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->data !== null) {
			$data->data = $this->data->jsonSerialize();
		}
		return $data;
	}
}
