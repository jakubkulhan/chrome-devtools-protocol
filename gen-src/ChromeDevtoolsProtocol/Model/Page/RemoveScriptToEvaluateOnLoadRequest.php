<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.removeScriptToEvaluateOnLoad command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveScriptToEvaluateOnLoadRequest implements \JsonSerializable
{
	/** @var string */
	public $identifier;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->identifier)) {
			$instance->identifier = (string)$data->identifier;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->identifier !== null) {
			$data->identifier = $this->identifier;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveScriptToEvaluateOnLoadRequestBuilder
	 */
	public static function builder(): RemoveScriptToEvaluateOnLoadRequestBuilder
	{
		return new RemoveScriptToEvaluateOnLoadRequestBuilder();
	}
}
