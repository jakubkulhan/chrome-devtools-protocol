<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.WasmCrossOriginModuleSharingIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WasmCrossOriginModuleSharingIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $wasmModuleUrl;

	/** @var string */
	public $sourceOrigin;

	/** @var string */
	public $targetOrigin;

	/** @var bool */
	public $isWarning;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->wasmModuleUrl)) {
			$instance->wasmModuleUrl = (string)$data->wasmModuleUrl;
		}
		if (isset($data->sourceOrigin)) {
			$instance->sourceOrigin = (string)$data->sourceOrigin;
		}
		if (isset($data->targetOrigin)) {
			$instance->targetOrigin = (string)$data->targetOrigin;
		}
		if (isset($data->isWarning)) {
			$instance->isWarning = (bool)$data->isWarning;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->wasmModuleUrl !== null) {
			$data->wasmModuleUrl = $this->wasmModuleUrl;
		}
		if ($this->sourceOrigin !== null) {
			$data->sourceOrigin = $this->sourceOrigin;
		}
		if ($this->targetOrigin !== null) {
			$data->targetOrigin = $this->targetOrigin;
		}
		if ($this->isWarning !== null) {
			$data->isWarning = $this->isWarning;
		}
		return $data;
	}
}
