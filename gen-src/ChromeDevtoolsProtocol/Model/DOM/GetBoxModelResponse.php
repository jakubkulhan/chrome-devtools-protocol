<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getBoxModel command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetBoxModelResponse implements \JsonSerializable
{
	/**
	 * Box model for the node.
	 *
	 * @var BoxModel
	 */
	public $model;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->model)) {
			$instance->model = BoxModel::fromJson($data->model);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->model !== null) {
			$data->model = $this->model->jsonSerialize();
		}
		return $data;
	}
}
