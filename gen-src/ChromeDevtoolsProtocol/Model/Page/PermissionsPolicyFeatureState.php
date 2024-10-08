<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.PermissionsPolicyFeatureState.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PermissionsPolicyFeatureState implements \JsonSerializable
{
	/** @var string */
	public $feature;

	/** @var bool */
	public $allowed;

	/** @var PermissionsPolicyBlockLocator|null */
	public $locator;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->feature)) {
			$instance->feature = (string)$data->feature;
		}
		if (isset($data->allowed)) {
			$instance->allowed = (bool)$data->allowed;
		}
		if (isset($data->locator)) {
			$instance->locator = PermissionsPolicyBlockLocator::fromJson($data->locator);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->feature !== null) {
			$data->feature = $this->feature;
		}
		if ($this->allowed !== null) {
			$data->allowed = $this->allowed;
		}
		if ($this->locator !== null) {
			$data->locator = $this->locator->jsonSerialize();
		}
		return $data;
	}
}
