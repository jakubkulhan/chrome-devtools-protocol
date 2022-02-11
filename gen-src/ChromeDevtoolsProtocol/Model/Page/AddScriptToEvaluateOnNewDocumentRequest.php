<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.addScriptToEvaluateOnNewDocument command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddScriptToEvaluateOnNewDocumentRequest implements \JsonSerializable
{
	/** @var string */
	public $source;

	/**
	 * If specified, creates an isolated world with the given name and evaluates given script in it. This world name will be used as the ExecutionContextDescription::name when the corresponding event is emitted.
	 *
	 * @var string|null
	 */
	public $worldName;

	/**
	 * Specifies whether command line API should be available to the script, defaults to false.
	 *
	 * @var bool|null
	 */
	public $includeCommandLineAPI;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		if (isset($data->worldName)) {
			$instance->worldName = (string)$data->worldName;
		}
		if (isset($data->includeCommandLineAPI)) {
			$instance->includeCommandLineAPI = (bool)$data->includeCommandLineAPI;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->source !== null) {
			$data->source = $this->source;
		}
		if ($this->worldName !== null) {
			$data->worldName = $this->worldName;
		}
		if ($this->includeCommandLineAPI !== null) {
			$data->includeCommandLineAPI = $this->includeCommandLineAPI;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddScriptToEvaluateOnNewDocumentRequestBuilder
	 */
	public static function builder(): AddScriptToEvaluateOnNewDocumentRequestBuilder
	{
		return new AddScriptToEvaluateOnNewDocumentRequestBuilder();
	}
}
