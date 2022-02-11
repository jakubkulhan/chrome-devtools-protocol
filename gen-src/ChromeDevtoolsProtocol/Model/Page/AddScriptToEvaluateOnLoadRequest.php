<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.addScriptToEvaluateOnLoad command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddScriptToEvaluateOnLoadRequest implements \JsonSerializable
{
	/** @var string */
	public $scriptSource;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptSource)) {
			$instance->scriptSource = (string)$data->scriptSource;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptSource !== null) {
			$data->scriptSource = $this->scriptSource;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddScriptToEvaluateOnLoadRequestBuilder
	 */
	public static function builder(): AddScriptToEvaluateOnLoadRequestBuilder
	{
		return new AddScriptToEvaluateOnLoadRequestBuilder();
	}
}
