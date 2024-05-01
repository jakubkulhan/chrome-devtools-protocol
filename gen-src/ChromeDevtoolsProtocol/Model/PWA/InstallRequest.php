<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Request for PWA.install command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InstallRequest implements \JsonSerializable
{
	/** @var string */
	public $manifestId;

	/**
	 * The location of the app or bundle overriding the one derived from the manifestId.
	 *
	 * @var string|null
	 */
	public $installUrlOrBundleUrl;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->manifestId)) {
			$instance->manifestId = (string)$data->manifestId;
		}
		if (isset($data->installUrlOrBundleUrl)) {
			$instance->installUrlOrBundleUrl = (string)$data->installUrlOrBundleUrl;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->manifestId !== null) {
			$data->manifestId = $this->manifestId;
		}
		if ($this->installUrlOrBundleUrl !== null) {
			$data->installUrlOrBundleUrl = $this->installUrlOrBundleUrl;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return InstallRequestBuilder
	 */
	public static function builder(): InstallRequestBuilder
	{
		return new InstallRequestBuilder();
	}
}
