<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.collectClassNames command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CollectClassNamesResponse implements \JsonSerializable
{
	/**
	 * Class name list.
	 *
	 * @var string[]
	 */
	public $classNames;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->classNames)) {
			$instance->classNames = [];
			foreach ($data->classNames as $item) {
				$instance->classNames[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->classNames !== null) {
			$data->classNames = [];
			foreach ($this->classNames as $item) {
				$data->classNames[] = $item;
			}
		}
		return $data;
	}
}
