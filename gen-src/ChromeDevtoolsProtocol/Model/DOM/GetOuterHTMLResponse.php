<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getOuterHTML command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOuterHTMLResponse implements \JsonSerializable
{
	/**
	 * Outer HTML markup.
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
		if (isset($data->outerHTML)) {
			$instance->outerHTML = (string)$data->outerHTML;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->outerHTML !== null) {
			$data->outerHTML = $this->outerHTML;
		}
		return $data;
	}
}
