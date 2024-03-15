<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getLocationForSelector command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetLocationForSelectorResponse implements \JsonSerializable
{
	/** @var SourceRange[] */
	public $ranges;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ranges)) {
			$instance->ranges = [];
			foreach ($data->ranges as $item) {
				$instance->ranges[] = SourceRange::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ranges !== null) {
			$data->ranges = [];
			foreach ($this->ranges as $item) {
				$data->ranges[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
