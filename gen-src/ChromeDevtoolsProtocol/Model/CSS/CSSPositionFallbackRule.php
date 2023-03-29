<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS position-fallback rule representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSPositionFallbackRule implements \JsonSerializable
{
	/** @var Value */
	public $name;

	/**
	 * List of keyframes.
	 *
	 * @var CSSTryRule[]
	 */
	public $tryRules;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = Value::fromJson($data->name);
		}
		if (isset($data->tryRules)) {
			$instance->tryRules = [];
			foreach ($data->tryRules as $item) {
				$instance->tryRules[] = CSSTryRule::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name->jsonSerialize();
		}
		if ($this->tryRules !== null) {
			$data->tryRules = [];
			foreach ($this->tryRules as $item) {
				$data->tryRules[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
