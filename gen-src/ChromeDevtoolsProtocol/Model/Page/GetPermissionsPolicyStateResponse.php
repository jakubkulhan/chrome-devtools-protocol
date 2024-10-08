<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getPermissionsPolicyState command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPermissionsPolicyStateResponse implements \JsonSerializable
{
	/** @var PermissionsPolicyFeatureState[] */
	public $states;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->states)) {
			$instance->states = [];
			foreach ($data->states as $item) {
				$instance->states[] = PermissionsPolicyFeatureState::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->states !== null) {
			$data->states = [];
			foreach ($this->states as $item) {
				$data->states[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
