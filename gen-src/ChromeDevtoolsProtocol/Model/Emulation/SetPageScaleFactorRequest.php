<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setPageScaleFactor command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPageScaleFactorRequest implements \JsonSerializable
{
	/**
	 * Page scale factor.
	 *
	 * @var int|float
	 */
	public $pageScaleFactor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->pageScaleFactor)) {
			$instance->pageScaleFactor = $data->pageScaleFactor;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->pageScaleFactor !== null) {
			$data->pageScaleFactor = $this->pageScaleFactor;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPageScaleFactorRequestBuilder
	 */
	public static function builder(): SetPageScaleFactorRequestBuilder
	{
		return new SetPageScaleFactorRequestBuilder();
	}
}
