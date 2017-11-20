<?php
namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Named type Runtime.CustomPreview.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CustomPreview implements \JsonSerializable
{
	/** @var string */
	public $header;

	/** @var bool */
	public $hasBody;

	/** @var string */
	public $formatterObjectId;

	/** @var string */
	public $bindRemoteObjectFunctionId;

	/** @var string */
	public $configObjectId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->header)) {
			$instance->header = (string)$data->header;
		}
		if (isset($data->hasBody)) {
			$instance->hasBody = (bool)$data->hasBody;
		}
		if (isset($data->formatterObjectId)) {
			$instance->formatterObjectId = (string)$data->formatterObjectId;
		}
		if (isset($data->bindRemoteObjectFunctionId)) {
			$instance->bindRemoteObjectFunctionId = (string)$data->bindRemoteObjectFunctionId;
		}
		if (isset($data->configObjectId)) {
			$instance->configObjectId = (string)$data->configObjectId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->header !== null) {
			$data->header = $this->header;
		}
		if ($this->hasBody !== null) {
			$data->hasBody = $this->hasBody;
		}
		if ($this->formatterObjectId !== null) {
			$data->formatterObjectId = $this->formatterObjectId;
		}
		if ($this->bindRemoteObjectFunctionId !== null) {
			$data->bindRemoteObjectFunctionId = $this->bindRemoteObjectFunctionId;
		}
		if ($this->configObjectId !== null) {
			$data->configObjectId = $this->configObjectId;
		}
		return $data;
	}
}
