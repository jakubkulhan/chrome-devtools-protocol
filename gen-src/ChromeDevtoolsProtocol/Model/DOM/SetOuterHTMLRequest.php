<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.setOuterHTML command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetOuterHTMLRequest implements \JsonSerializable
{
	/**
	 * Id of the node to set markup for.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Outer HTML markup to set.
	 *
	 * @var string
	 */
	public $outerHTML;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->outerHTML)) {
			$instance->outerHTML = (string)$data->outerHTML;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->outerHTML !== null) {
			$data->outerHTML = $this->outerHTML;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetOuterHTMLRequestBuilder
	 */
	public static function builder(): SetOuterHTMLRequestBuilder
	{
		return new SetOuterHTMLRequestBuilder();
	}
}
