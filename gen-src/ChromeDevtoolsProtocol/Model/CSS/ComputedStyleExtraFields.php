<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Named type CSS.ComputedStyleExtraFields.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ComputedStyleExtraFields implements \JsonSerializable
{
	/**
	 * Returns whether or not this node is being rendered with base appearance, which happens when it has its appearance property set to base/base-select or it is in the subtree of an element being rendered with base appearance.
	 *
	 * @var bool
	 */
	public $isAppearanceBase;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->isAppearanceBase)) {
			$instance->isAppearanceBase = (bool)$data->isAppearanceBase;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->isAppearanceBase !== null) {
			$data->isAppearanceBase = $this->isAppearanceBase;
		}
		return $data;
	}
}
