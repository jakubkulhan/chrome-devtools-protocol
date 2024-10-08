<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setSPCTransactionMode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSPCTransactionModeRequest implements \JsonSerializable
{
	/** @var string */
	public $mode;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->mode)) {
			$instance->mode = (string)$data->mode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->mode !== null) {
			$data->mode = $this->mode;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSPCTransactionModeRequestBuilder
	 */
	public static function builder(): SetSPCTransactionModeRequestBuilder
	{
		return new SetSPCTransactionModeRequestBuilder();
	}
}
