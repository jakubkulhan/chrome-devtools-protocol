<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when same-document navigation happens, e.g. due to history API usage or anchor navigation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NavigatedWithinDocumentEvent implements \JsonSerializable
{
	/**
	 * Id of the frame.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Frame's new url.
	 *
	 * @var string
	 */
	public $url;


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
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		return $data;
	}
}
