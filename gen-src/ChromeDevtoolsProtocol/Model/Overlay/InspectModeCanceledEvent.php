<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Fired when user cancels the inspect mode.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectModeCanceledEvent implements \JsonSerializable
{
	public static function fromJson($data)
	{
		$instance = new static();
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		return $data;
	}
}
