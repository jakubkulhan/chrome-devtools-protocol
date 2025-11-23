<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.getAnnotatedPageContent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAnnotatedPageContentRequest implements \JsonSerializable
{
	/**
	 * Whether to include actionable information. Defaults to true.
	 *
	 * @var bool|null
	 */
	public $includeActionableInformation;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->includeActionableInformation)) {
			$instance->includeActionableInformation = (bool)$data->includeActionableInformation;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->includeActionableInformation !== null) {
			$data->includeActionableInformation = $this->includeActionableInformation;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetAnnotatedPageContentRequestBuilder
	 */
	public static function builder(): GetAnnotatedPageContentRequestBuilder
	{
		return new GetAnnotatedPageContentRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
