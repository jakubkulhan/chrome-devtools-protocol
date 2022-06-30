<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setScopeText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetScopeTextResponse implements \JsonSerializable
{
	/**
	 * The resulting CSS Scope rule after modification.
	 *
	 * @var CSSScope
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
			$instance->scope = CSSScope::fromJson($data->scope);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scope !== null) {
			$data->scope = $this->scope->jsonSerialize();
		}
		return $data;
	}
}
