<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.collectClassNames command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CollectClassNamesRequest implements \JsonSerializable
{
	/** @var string */
	public $styleSheetId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CollectClassNamesRequestBuilder
	 */
	public static function builder(): CollectClassNamesRequestBuilder
	{
		return new CollectClassNamesRequestBuilder();
	}
}
