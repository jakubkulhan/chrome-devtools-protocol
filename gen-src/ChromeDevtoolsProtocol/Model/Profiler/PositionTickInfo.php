<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Specifies a number of samples attributed to a certain source position.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PositionTickInfo implements \JsonSerializable
{
	/**
	 * Source line number (1-based).
	 *
	 * @var int
	 */
	public $line;

	/**
	 * Number of samples attributed to the source line.
	 *
	 * @var int
	 */
	public $ticks;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->line)) {
			$instance->line = (int)$data->line;
		}
		if (isset($data->ticks)) {
			$instance->ticks = (int)$data->ticks;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->line !== null) {
			$data->line = $this->line;
		}
		if ($this->ticks !== null) {
			$data->ticks = $this->ticks;
		}
		return $data;
	}
}
