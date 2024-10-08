<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Information about a cookie that is affected by an inspector issue.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AffectedCookie implements \JsonSerializable
{
	/**
	 * The following three properties uniquely identify a cookie
	 *
	 * @var string
	 */
	public $name;

	/** @var string */
	public $path;

	/** @var string */
	public $domain;


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
		if (isset($data->path)) {
			$instance->path = (string)$data->path;
		}
		if (isset($data->domain)) {
			$instance->domain = (string)$data->domain;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->path !== null) {
			$data->path = $this->path;
		}
		if ($this->domain !== null) {
			$data->domain = $this->domain;
		}
		return $data;
	}
}
