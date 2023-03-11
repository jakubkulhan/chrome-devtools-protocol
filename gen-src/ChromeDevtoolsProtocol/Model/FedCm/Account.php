<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * Corresponds to IdentityRequestAccount
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Account implements \JsonSerializable
{
	/** @var string */
	public $accountId;

	/** @var string */
	public $email;

	/** @var string */
	public $name;

	/** @var string */
	public $givenName;

	/** @var string */
	public $pictureUrl;

	/** @var string */
	public $idpConfigUrl;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->accountId)) {
			$instance->accountId = (string)$data->accountId;
		}
		if (isset($data->email)) {
			$instance->email = (string)$data->email;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->givenName)) {
			$instance->givenName = (string)$data->givenName;
		}
		if (isset($data->pictureUrl)) {
			$instance->pictureUrl = (string)$data->pictureUrl;
		}
		if (isset($data->idpConfigUrl)) {
			$instance->idpConfigUrl = (string)$data->idpConfigUrl;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->accountId !== null) {
			$data->accountId = $this->accountId;
		}
		if ($this->email !== null) {
			$data->email = $this->email;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->givenName !== null) {
			$data->givenName = $this->givenName;
		}
		if ($this->pictureUrl !== null) {
			$data->pictureUrl = $this->pictureUrl;
		}
		if ($this->idpConfigUrl !== null) {
			$data->idpConfigUrl = $this->idpConfigUrl;
		}
		return $data;
	}
}
