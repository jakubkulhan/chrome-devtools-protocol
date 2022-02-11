<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.stepOver command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StepOverRequest implements \JsonSerializable
{
	/**
	 * The skipList specifies location ranges that should be skipped on step over.
	 *
	 * @var LocationRange[]|null
	 */
	public $skipList;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->skipList)) {
			$instance->skipList = [];
			foreach ($data->skipList as $item) {
				$instance->skipList[] = LocationRange::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->skipList !== null) {
			$data->skipList = [];
			foreach ($this->skipList as $item) {
				$data->skipList[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StepOverRequestBuilder
	 */
	public static function builder(): StepOverRequestBuilder
	{
		return new StepOverRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
