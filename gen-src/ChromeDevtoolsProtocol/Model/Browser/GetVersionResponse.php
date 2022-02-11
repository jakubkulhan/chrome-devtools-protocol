<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Response to Browser.getVersion command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetVersionResponse implements \JsonSerializable
{
	/**
	 * Protocol version.
	 *
	 * @var string
	 */
	public $protocolVersion;

	/**
	 * Product name.
	 *
	 * @var string
	 */
	public $product;

	/**
	 * Product revision.
	 *
	 * @var string
	 */
	public $revision;

	/**
	 * User-Agent.
	 *
	 * @var string
	 */
	public $userAgent;

	/**
	 * V8 version.
	 *
	 * @var string
	 */
	public $jsVersion;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->protocolVersion)) {
			$instance->protocolVersion = (string)$data->protocolVersion;
		}
		if (isset($data->product)) {
			$instance->product = (string)$data->product;
		}
		if (isset($data->revision)) {
			$instance->revision = (string)$data->revision;
		}
		if (isset($data->userAgent)) {
			$instance->userAgent = (string)$data->userAgent;
		}
		if (isset($data->jsVersion)) {
			$instance->jsVersion = (string)$data->jsVersion;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->protocolVersion !== null) {
			$data->protocolVersion = $this->protocolVersion;
		}
		if ($this->product !== null) {
			$data->product = $this->product;
		}
		if ($this->revision !== null) {
			$data->revision = $this->revision;
		}
		if ($this->userAgent !== null) {
			$data->userAgent = $this->userAgent;
		}
		if ($this->jsVersion !== null) {
			$data->jsVersion = $this->jsVersion;
		}
		return $data;
	}
}
