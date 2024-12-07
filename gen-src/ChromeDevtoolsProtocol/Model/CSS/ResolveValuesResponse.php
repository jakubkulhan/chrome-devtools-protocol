<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.resolveValues command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResolveValuesResponse implements \JsonSerializable
{
	/** @var string[] */
	public $results;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->results)) {
			$instance->results = [];
			foreach ($data->results as $item) {
				$instance->results[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->results !== null) {
			$data->results = [];
			foreach ($this->results as $item) {
				$data->results[] = $item;
			}
		}
		return $data;
	}
}
