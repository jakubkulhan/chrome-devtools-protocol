<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setAsyncCallStackDepth command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAsyncCallStackDepthRequest implements \JsonSerializable
{
	/**
	 * Maximum depth of async call stacks. Setting to `0` will effectively disable collecting async call stacks (default).
	 *
	 * @var int
	 */
	public $maxDepth;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->maxDepth)) {
			$instance->maxDepth = (int)$data->maxDepth;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->maxDepth !== null) {
			$data->maxDepth = $this->maxDepth;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAsyncCallStackDepthRequestBuilder
	 */
	public static function builder(): SetAsyncCallStackDepthRequestBuilder
	{
		return new SetAsyncCallStackDepthRequestBuilder();
	}
}
