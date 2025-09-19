<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setPrewarmingAllowed command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPrewarmingAllowedRequest implements \JsonSerializable
{
	/** @var bool */
	public $isAllowed;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->isAllowed)) {
			$instance->isAllowed = (bool)$data->isAllowed;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->isAllowed !== null) {
			$data->isAllowed = $this->isAllowed;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPrewarmingAllowedRequestBuilder
	 */
	public static function builder(): SetPrewarmingAllowedRequestBuilder
	{
		return new SetPrewarmingAllowedRequestBuilder();
	}
}
