<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowAdHighlights command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowAdHighlightsRequest implements \JsonSerializable
{
	/**
	 * True for showing ad highlights
	 *
	 * @var bool
	 */
	public $show;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->show)) {
			$instance->show = (bool)$data->show;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->show !== null) {
			$data->show = $this->show;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowAdHighlightsRequestBuilder
	 */
	public static function builder(): SetShowAdHighlightsRequestBuilder
	{
		return new SetShowAdHighlightsRequestBuilder();
	}
}
