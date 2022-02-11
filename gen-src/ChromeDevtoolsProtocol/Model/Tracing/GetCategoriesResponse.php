<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Response to Tracing.getCategories command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCategoriesResponse implements \JsonSerializable
{
	/**
	 * A list of supported tracing categories.
	 *
	 * @var string[]
	 */
	public $categories;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->categories)) {
			$instance->categories = [];
			foreach ($data->categories as $item) {
				$instance->categories[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->categories !== null) {
			$data->categories = [];
			foreach ($this->categories as $item) {
				$data->categories[] = $item;
			}
		}
		return $data;
	}
}
