<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Issued when all executionContexts were cleared in browser
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecutionContextsClearedEvent implements \JsonSerializable
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
