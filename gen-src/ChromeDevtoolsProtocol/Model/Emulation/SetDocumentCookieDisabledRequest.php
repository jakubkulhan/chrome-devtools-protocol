<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setDocumentCookieDisabled command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDocumentCookieDisabledRequest implements \JsonSerializable
{
	/**
	 * Whether document.coookie API should be disabled.
	 *
	 * @var bool
	 */
	public $disabled;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->disabled)) {
			$instance->disabled = (bool)$data->disabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->disabled !== null) {
			$data->disabled = $this->disabled;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDocumentCookieDisabledRequestBuilder
	 */
	public static function builder(): SetDocumentCookieDisabledRequestBuilder
	{
		return new SetDocumentCookieDisabledRequestBuilder();
	}
}
