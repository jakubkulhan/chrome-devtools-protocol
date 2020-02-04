<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.Issue.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Issue implements \JsonSerializable
{
	/** @var string */
	public $code;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->code)) {
			$instance->code = (string)$data->code;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->code !== null) {
			$data->code = $this->code;
		}
		return $data;
	}
}
