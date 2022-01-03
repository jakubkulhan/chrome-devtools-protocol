<?php

namespace ChromeDevtoolsProtocol\Model\Inspector;

/**
 * Fired when debugging target has reloaded after crash
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TargetReloadedAfterCrashEvent implements \JsonSerializable
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
