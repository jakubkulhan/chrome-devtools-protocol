<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setDocumentContent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDocumentContentRequest implements \JsonSerializable
{
	/**
	 * Frame id to set HTML for.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * HTML content to set.
	 *
	 * @var string
	 */
	public $html;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->html)) {
			$instance->html = (string)$data->html;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->html !== null) {
			$data->html = $this->html;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDocumentContentRequestBuilder
	 */
	public static function builder(): SetDocumentContentRequestBuilder
	{
		return new SetDocumentContentRequestBuilder();
	}
}
