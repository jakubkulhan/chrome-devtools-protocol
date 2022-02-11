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
	/** @var Sink[] */
	public $sinks;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sinks)) {
			$instance->sinks = [];
			foreach ($data->sinks as $item) {
				$instance->sinks[] = Sink::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sinks !== null) {
			$data->sinks = [];
			foreach ($this->sinks as $item) {
				$data->sinks[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
