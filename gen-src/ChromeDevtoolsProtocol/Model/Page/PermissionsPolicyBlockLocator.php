<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.PermissionsPolicyBlockLocator.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PermissionsPolicyBlockLocator implements \JsonSerializable
{
	/** @var string */
	public $frameId;

	/** @var string */
	public $blockReason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->blockReason)) {
			$instance->blockReason = (string)$data->blockReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->blockReason !== null) {
			$data->blockReason = $this->blockReason;
		}
		return $data;
	}
}
