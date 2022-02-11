<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setMediaText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetMediaTextResponse implements \JsonSerializable
{
	/**
	 * The resulting CSS media rule after modification.
	 *
	 * @var CSSMedia
	 */
	public $media;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->media)) {
			$instance->media = CSSMedia::fromJson($data->media);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->media !== null) {
			$data->media = $this->media->jsonSerialize();
		}
		return $data;
	}
}
