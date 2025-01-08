<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getLonghandProperties command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetLonghandPropertiesResponse implements \JsonSerializable
{
	/** @var CSSProperty[] */
	public $longhandProperties;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->longhandProperties)) {
			$instance->longhandProperties = [];
			foreach ($data->longhandProperties as $item) {
				$instance->longhandProperties[] = CSSProperty::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->longhandProperties !== null) {
			$data->longhandProperties = [];
			foreach ($this->longhandProperties as $item) {
				$data->longhandProperties[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
