<?php

namespace ChromeDevtoolsProtocol\Model\PerformanceTimeline;

/**
 * See https://wicg.github.io/layout-instability/#sec-layout-shift and layout_shift.idl
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LayoutShift implements \JsonSerializable
{
	/**
	 * Score increment produced by this event.
	 *
	 * @var int|float
	 */
	public $value;

	/** @var bool */
	public $hadRecentInput;

	/** @var int|float */
	public $lastInputTime;

	/** @var LayoutShiftAttribution[] */
	public $sources;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->value)) {
			$instance->value = $data->value;
		}
		if (isset($data->hadRecentInput)) {
			$instance->hadRecentInput = (bool)$data->hadRecentInput;
		}
		if (isset($data->lastInputTime)) {
			$instance->lastInputTime = $data->lastInputTime;
		}
		if (isset($data->sources)) {
			$instance->sources = [];
			foreach ($data->sources as $item) {
				$instance->sources[] = LayoutShiftAttribution::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->hadRecentInput !== null) {
			$data->hadRecentInput = $this->hadRecentInput;
		}
		if ($this->lastInputTime !== null) {
			$data->lastInputTime = $this->lastInputTime;
		}
		if ($this->sources !== null) {
			$data->sources = [];
			foreach ($this->sources as $item) {
				$data->sources[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
