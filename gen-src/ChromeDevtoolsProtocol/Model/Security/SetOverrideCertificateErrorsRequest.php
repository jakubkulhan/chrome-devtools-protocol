<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * Request for Security.setOverrideCertificateErrors command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetOverrideCertificateErrorsRequest implements \JsonSerializable
{
	/**
	 * If true, certificate errors will be overridden.
	 *
	 * @var bool
	 */
	public $override;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->override)) {
			$instance->override = (bool)$data->override;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->override !== null) {
			$data->override = $this->override;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetOverrideCertificateErrorsRequestBuilder
	 */
	public static function builder(): SetOverrideCertificateErrorsRequestBuilder
	{
		return new SetOverrideCertificateErrorsRequestBuilder();
	}
}
