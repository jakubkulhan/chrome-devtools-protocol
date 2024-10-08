<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getManifestIcons command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetManifestIconsResponse implements \JsonSerializable
{
	/** @var string|null */
	public $primaryIcon;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->primaryIcon)) {
			$instance->primaryIcon = (string)$data->primaryIcon;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->primaryIcon !== null) {
			$data->primaryIcon = $this->primaryIcon;
		}
		return $data;
	}
}
