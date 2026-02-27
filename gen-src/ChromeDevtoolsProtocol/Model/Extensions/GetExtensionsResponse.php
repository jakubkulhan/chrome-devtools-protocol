<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

/**
 * Response to Extensions.getExtensions command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetExtensionsResponse implements \JsonSerializable
{
	/** @var ExtensionInfo[] */
	public $extensions;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->extensions)) {
			$instance->extensions = [];
			foreach ($data->extensions as $item) {
				$instance->extensions[] = ExtensionInfo::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->extensions !== null) {
			$data->extensions = [];
			foreach ($this->extensions as $item) {
				$data->extensions[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
