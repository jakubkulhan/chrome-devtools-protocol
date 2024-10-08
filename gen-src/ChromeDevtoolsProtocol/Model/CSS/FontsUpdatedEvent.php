<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Fires whenever a web font is updated. A non-empty font parameter indicates a successfully loaded web font.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FontsUpdatedEvent implements \JsonSerializable
{
	/**
	 * The web font that has loaded.
	 *
	 * @var FontFace|null
	 */
	public $font;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->font)) {
			$instance->font = FontFace::fromJson($data->font);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->font !== null) {
			$data->font = $this->font->jsonSerialize();
		}
		return $data;
	}
}
