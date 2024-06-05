<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Request for PWA.openCurrentPageInApp command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OpenCurrentPageInAppRequest implements \JsonSerializable
{
	/** @var string */
	public $manifestId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->manifestId !== null) {
			$data->manifestId = $this->manifestId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return OpenCurrentPageInAppRequestBuilder
	 */
	public static function builder(): OpenCurrentPageInAppRequestBuilder
	{
		return new OpenCurrentPageInAppRequestBuilder();
	}
}
