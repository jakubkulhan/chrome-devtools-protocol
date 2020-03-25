<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.AffectedResources.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AffectedResources implements \JsonSerializable
{
	/** @var AffectedCookie[]|null */
	public $cookies;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cookies)) {
			$instance->cookies = [];
			foreach ($data->cookies as $item) {
				$instance->cookies[] = AffectedCookie::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cookies !== null) {
			$data->cookies = [];
			foreach ($this->cookies as $item) {
				$data->cookies[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
