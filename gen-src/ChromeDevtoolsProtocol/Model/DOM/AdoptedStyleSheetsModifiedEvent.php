<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Fired when `Element`'s adoptedStyleSheets are modified.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdoptedStyleSheetsModifiedEvent implements \JsonSerializable
{
	/**
	 * Id of the node that has changed.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * New adoptedStyleSheets array.
	 *
	 * @var string[]
	 */
	public $adoptedStyleSheets;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->adoptedStyleSheets)) {
			$instance->adoptedStyleSheets = [];
		if (isset($data->adoptedStyleSheets)) {
			$instance->adoptedStyleSheets = [];
			foreach ($data->adoptedStyleSheets as $item) {
				$instance->adoptedStyleSheets[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->adoptedStyleSheets !== null) {
			$data->adoptedStyleSheets = [];
		if ($this->adoptedStyleSheets !== null) {
			$data->adoptedStyleSheets = [];
			foreach ($this->adoptedStyleSheets as $item) {
				$data->adoptedStyleSheets[] = $item;
			}
		}
		}
		return $data;
	}
}
