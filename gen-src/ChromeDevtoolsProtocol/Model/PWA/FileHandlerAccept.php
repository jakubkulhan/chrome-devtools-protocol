<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * The following types are the replica of https://crsrc.org/c/chrome/browser/web_applications/proto/web_app_os_integration_state.proto;drc=9910d3be894c8f142c977ba1023f30a656bc13fc;l=67
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FileHandlerAccept implements \JsonSerializable
{
	/**
	 * New name of the mimetype according to https://www.iana.org/assignments/media-types/media-types.xhtml
	 *
	 * @var string
	 */
	public $mediaType;

	/** @var string[] */
	public $fileExtensions;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->mediaType)) {
			$instance->mediaType = (string)$data->mediaType;
		}
		if (isset($data->fileExtensions)) {
			$instance->fileExtensions = [];
			foreach ($data->fileExtensions as $item) {
				$instance->fileExtensions[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->mediaType !== null) {
			$data->mediaType = $this->mediaType;
		}
		if ($this->fileExtensions !== null) {
			$data->fileExtensions = [];
			foreach ($this->fileExtensions as $item) {
				$data->fileExtensions[] = $item;
			}
		}
		return $data;
	}
}
