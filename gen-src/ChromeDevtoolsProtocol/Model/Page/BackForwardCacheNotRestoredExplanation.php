<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.BackForwardCacheNotRestoredExplanation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BackForwardCacheNotRestoredExplanation implements \JsonSerializable
{
	/**
	 * Type of the reason
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Not restored reason
	 *
	 * @var string
	 */
	public $reason;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		return $data;
	}
}
