<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Parsed app manifest properties.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AppManifestParsedProperties implements \JsonSerializable
{
	/**
	 * Computed scope value
	 *
	 * @var string
	 */
	public $scope;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scope)) {
			$instance->scope = (string)$data->scope;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scope !== null) {
			$data->scope = $this->scope;
		}
		return $data;
	}
}
