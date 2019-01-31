<?php

namespace ChromeDevtoolsProtocol\Model\Cast;

/**
 * This is fired whenever the list of available sinks changes. A sink is a device or a software surface that you can cast to.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SinksUpdatedEvent implements \JsonSerializable
{
	/** @var string[] */
	public $sinkNames;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sinkNames)) {
			$instance->sinkNames = [];
			foreach ($data->sinkNames as $item) {
				$instance->sinkNames[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sinkNames !== null) {
			$data->sinkNames = [];
			foreach ($this->sinkNames as $item) {
				$data->sinkNames[] = $item;
			}
		}
		return $data;
	}
}
