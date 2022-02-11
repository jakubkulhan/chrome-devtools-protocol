<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Location range within one script.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LocationRange implements \JsonSerializable
{
	/** @var string */
	public $scriptId;

	/** @var ScriptPosition */
	public $start;

	/** @var ScriptPosition */
	public $end;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->start)) {
			$instance->start = ScriptPosition::fromJson($data->start);
		}
		if (isset($data->end)) {
			$instance->end = ScriptPosition::fromJson($data->end);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->start !== null) {
			$data->start = $this->start->jsonSerialize();
		}
		if ($this->end !== null) {
			$data->end = $this->end->jsonSerialize();
		}
		return $data;
	}
}
