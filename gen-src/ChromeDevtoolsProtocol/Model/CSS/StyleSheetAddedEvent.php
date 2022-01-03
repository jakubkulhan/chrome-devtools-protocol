<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Fired whenever an active document stylesheet is added.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StyleSheetAddedEvent implements \JsonSerializable
{
	/**
	 * Added stylesheet metainfo.
	 *
	 * @var CSSStyleSheetHeader
	 */
	public $header;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->header)) {
			$instance->header = CSSStyleSheetHeader::fromJson($data->header);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->header !== null) {
			$data->header = $this->header->jsonSerialize();
		}
		return $data;
	}
}
