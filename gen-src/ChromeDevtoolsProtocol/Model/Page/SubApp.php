<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.SubApp.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SubApp implements \JsonSerializable
{
	/**
	 * Display name of the sub-app.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Scope of the sub-app.
	 *
	 * @var string
	 */
	public $scope;

	/**
	 * Manifest id of the sub-app.
	 *
	 * @var string
	 */
	public $manifestId;

	/**
	 * Start URL of the sub-app.
	 *
	 * @var string
	 */
	public $startUrl;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->scope)) {
			$instance->scope = (string)$data->scope;
		}
		if (isset($data->manifestId)) {
			$instance->manifestId = (string)$data->manifestId;
		}
		if (isset($data->startUrl)) {
			$instance->startUrl = (string)$data->startUrl;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->scope !== null) {
			$data->scope = $this->scope;
		}
		if ($this->manifestId !== null) {
			$data->manifestId = $this->manifestId;
		}
		if ($this->startUrl !== null) {
			$data->startUrl = $this->startUrl;
		}
		return $data;
	}
}
