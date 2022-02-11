<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Selector list data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SelectorList implements \JsonSerializable
{
	/**
	 * Selectors in the list.
	 *
	 * @var Value[]
	 */
	public $selectors;

	/**
	 * Rule selector text.
	 *
	 * @var string
	 */
	public $text;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->selectors)) {
			$instance->selectors = [];
			foreach ($data->selectors as $item) {
				$instance->selectors[] = Value::fromJson($item);
			}
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->selectors !== null) {
			$data->selectors = [];
			foreach ($this->selectors as $item) {
				$data->selectors[] = $item->jsonSerialize();
			}
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		return $data;
	}
}
