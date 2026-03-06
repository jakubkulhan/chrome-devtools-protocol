<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setNavigationText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetNavigationTextResponse implements \JsonSerializable
{
	/**
	 * The resulting CSS Navigation rule after modification.
	 *
	 * @var CSSNavigation
	 */
	public $navigation;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->navigation)) {
			$instance->navigation = CSSNavigation::fromJson($data->navigation);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->navigation !== null) {
			$data->navigation = $this->navigation->jsonSerialize();
		}
		return $data;
	}
}
