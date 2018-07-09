<?php
namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Computed style snapshot.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StylesSnapshot implements \JsonSerializable
{
	/**
	 * Whitelisted ComputedStyle property values referenced by styleIndex.
	 *
	 * @var int[][]
	 */
	public $values;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->values)) {
			$instance->values = [];
		if (isset($data->values)) {
			$instance->values = [];
			foreach ($data->values as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = (int)$nestedItem;
				}
				$instance->values[] = $nested;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->values !== null) {
			$data->values = [];
		if ($this->values !== null) {
			$data->values = [];
			foreach ($this->values as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->values[] = $nested;
			}
		}
		}
		return $data;
	}
}
