<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * Request for Security.setIgnoreCertificateErrors command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetIgnoreCertificateErrorsRequest implements \JsonSerializable
{
	/**
	 * If true, all certificate errors will be ignored.
	 *
	 * @var bool
	 */
	public $ignore;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ignore)) {
			$instance->ignore = (bool)$data->ignore;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ignore !== null) {
			$data->ignore = $this->ignore;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetIgnoreCertificateErrorsRequestBuilder
	 */
	public static function builder(): SetIgnoreCertificateErrorsRequestBuilder
	{
		return new SetIgnoreCertificateErrorsRequestBuilder();
	}
}
