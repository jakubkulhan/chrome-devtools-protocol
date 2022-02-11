<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Fired when `Document` has been totally updated. Node ids are no longer valid.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DocumentUpdatedEvent implements \JsonSerializable
{
	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		return $data;
	}
}
