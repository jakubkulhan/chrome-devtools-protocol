<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getContentQuads command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetContentQuadsResponse implements \JsonSerializable
{
	/**
	 * Quads that describe node layout relative to viewport.
	 *
	 * @var int[][]|float[][]
	 */
	public $quads;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->quads)) {
			$instance->quads = [];
		if (isset($data->quads)) {
			$instance->quads = [];
			foreach ($data->quads as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$instance->quads[] = $nested;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->quads !== null) {
			$data->quads = [];
		if ($this->quads !== null) {
			$data->quads = [];
			foreach ($this->quads as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->quads[] = $nested;
			}
		}
		}
		return $data;
	}
}
