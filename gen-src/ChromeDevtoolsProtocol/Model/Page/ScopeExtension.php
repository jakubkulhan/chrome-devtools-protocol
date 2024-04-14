<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.ScopeExtension.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScopeExtension implements \JsonSerializable
{
	/**
	 * Instead of using tuple, this field always returns the serialized string for easy understanding and comparison.
	 *
	 * @var string
	 */
	public $origin;

	/** @var bool */
	public $hasOriginWildcard;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->hasOriginWildcard)) {
			$instance->hasOriginWildcard = (bool)$data->hasOriginWildcard;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->hasOriginWildcard !== null) {
			$data->hasOriginWildcard = $this->hasOriginWildcard;
		}
		return $data;
	}
}
