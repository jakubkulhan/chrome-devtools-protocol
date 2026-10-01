<?php

namespace ChromeDevtoolsProtocol\Model\FindInPage;

/**
 * Request for FindInPage.findFirst command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FindFirstRequest implements \JsonSerializable
{
	/** @var string */
	public $query;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->query)) {
			$instance->query = (string)$data->query;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->query !== null) {
			$data->query = $this->query;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return FindFirstRequestBuilder
	 */
	public static function builder(): FindFirstRequestBuilder
	{
		return new FindFirstRequestBuilder();
	}
}
