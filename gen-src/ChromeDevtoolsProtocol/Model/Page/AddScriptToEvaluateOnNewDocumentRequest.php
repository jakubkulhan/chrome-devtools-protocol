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


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->source !== null) {
			$data->source = $this->source;
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
