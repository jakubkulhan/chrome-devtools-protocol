<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setBlackboxExecutionContexts command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBlackboxExecutionContextsRequest implements \JsonSerializable
{
	/**
	 * Array of execution context unique ids for the debugger to ignore.
	 *
	 * @var string[]
	 */
	public $uniqueIds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->uniqueIds)) {
			$instance->uniqueIds = [];
			foreach ($data->uniqueIds as $item) {
				$instance->uniqueIds[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->uniqueIds !== null) {
			$data->uniqueIds = [];
			foreach ($this->uniqueIds as $item) {
				$data->uniqueIds[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBlackboxExecutionContextsRequestBuilder
	 */
	public static function builder(): SetBlackboxExecutionContextsRequestBuilder
	{
		return new SetBlackboxExecutionContextsRequestBuilder();
	}
}
