<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.addScriptToEvaluateOnNewDocument command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddScriptToEvaluateOnNewDocumentResponse implements \JsonSerializable
{
	/**
	 * Identifier of the added script.
	 *
	 * @var string
	 */
	public $identifier;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->identifier)) {
			$instance->identifier = (string)$data->identifier;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->identifier !== null) {
			$data->identifier = $this->identifier;
		}
		return $data;
	}
}
