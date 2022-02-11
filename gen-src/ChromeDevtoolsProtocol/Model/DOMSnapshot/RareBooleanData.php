<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Named type DOMSnapshot.RareBooleanData.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RareBooleanData implements \JsonSerializable
{
	/** @var int[] */
	public $index;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->index)) {
			$instance->index = [];
			foreach ($data->index as $item) {
				$instance->index[] = (int)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->index !== null) {
			$data->index = [];
			foreach ($this->index as $item) {
				$data->index[] = $item;
			}
		}
		return $data;
	}
}
