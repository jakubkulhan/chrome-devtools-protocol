<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setBlackboxedRanges command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBlackboxedRangesRequest implements \JsonSerializable
{
	/**
	 * Id of the script.
	 *
	 * @var string
	 */
	public $scriptId;

	/** @var ScriptPosition[] */
	public $positions;


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
		if (isset($data->positions)) {
			$instance->positions = [];
			foreach ($data->positions as $item) {
				$instance->positions[] = ScriptPosition::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->positions !== null) {
			$data->positions = [];
			foreach ($this->positions as $item) {
				$data->positions[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBlackboxedRangesRequestBuilder
	 */
	public static function builder(): SetBlackboxedRangesRequestBuilder
	{
		return new SetBlackboxedRangesRequestBuilder();
	}
}
