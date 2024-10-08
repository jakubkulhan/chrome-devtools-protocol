<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setPrerenderingAllowed command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPrerenderingAllowedRequest implements \JsonSerializable
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
	 * @return SetPrerenderingAllowedRequestBuilder
	 */
	public static function builder(): SetPrerenderingAllowedRequestBuilder
	{
		return new SetPrerenderingAllowedRequestBuilder();
	}
}
