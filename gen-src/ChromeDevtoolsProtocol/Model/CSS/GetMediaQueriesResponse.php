<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getMediaQueries command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetMediaQueriesResponse implements \JsonSerializable
{
	/** @var CSSMedia[] */
	public $medias;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->medias)) {
			$instance->medias = [];
			foreach ($data->medias as $item) {
				$instance->medias[] = CSSMedia::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->medias !== null) {
			$data->medias = [];
			foreach ($this->medias as $item) {
				$data->medias[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
