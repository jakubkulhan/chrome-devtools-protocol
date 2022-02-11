<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Request for Audits.checkContrast command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CheckContrastRequest implements \JsonSerializable
{
	/**
	 * Whether to report WCAG AAA level issues. Default is false.
	 *
	 * @var bool|null
	 */
	public $reportAAA;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->reportAAA)) {
			$instance->reportAAA = (bool)$data->reportAAA;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->reportAAA !== null) {
			$data->reportAAA = $this->reportAAA;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CheckContrastRequestBuilder
	 */
	public static function builder(): CheckContrastRequestBuilder
	{
		return new CheckContrastRequestBuilder();
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
