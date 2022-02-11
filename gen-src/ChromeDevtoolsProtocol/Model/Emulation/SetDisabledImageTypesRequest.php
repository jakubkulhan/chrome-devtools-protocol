<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setDisabledImageTypes command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDisabledImageTypesRequest implements \JsonSerializable
{
	/**
	 * Image types to disable.
	 *
	 * @var string[]
	 */
	public $imageTypes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->imageTypes)) {
			$instance->imageTypes = [];
		if (isset($data->imageTypes)) {
			$instance->imageTypes = [];
			foreach ($data->imageTypes as $item) {
				$instance->imageTypes[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->imageTypes !== null) {
			$data->imageTypes = [];
		if ($this->imageTypes !== null) {
			$data->imageTypes = [];
			foreach ($this->imageTypes as $item) {
				$data->imageTypes[] = $item;
			}
		}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDisabledImageTypesRequestBuilder
	 */
	public static function builder(): SetDisabledImageTypesRequestBuilder
	{
		return new SetDisabledImageTypesRequestBuilder();
	}
}
