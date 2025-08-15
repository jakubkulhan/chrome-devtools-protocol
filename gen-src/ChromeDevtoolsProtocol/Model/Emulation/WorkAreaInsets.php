<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Named type Emulation.WorkAreaInsets.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WorkAreaInsets implements \JsonSerializable
{
	/**
	 * Work area top inset in pixels. Default is 0;
	 *
	 * @var int|null
	 */
	public $top;

	/**
	 * Work area left inset in pixels. Default is 0;
	 *
	 * @var int|null
	 */
	public $left;

	/**
	 * Work area bottom inset in pixels. Default is 0;
	 *
	 * @var int|null
	 */
	public $bottom;

	/**
	 * Work area right inset in pixels. Default is 0;
	 *
	 * @var int|null
	 */
	public $right;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->top)) {
			$instance->top = (int)$data->top;
		}
		if (isset($data->left)) {
			$instance->left = (int)$data->left;
		}
		if (isset($data->bottom)) {
			$instance->bottom = (int)$data->bottom;
		}
		if (isset($data->right)) {
			$instance->right = (int)$data->right;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->top !== null) {
			$data->top = $this->top;
		}
		if ($this->left !== null) {
			$data->left = $this->left;
		}
		if ($this->bottom !== null) {
			$data->bottom = $this->bottom;
		}
		if ($this->right !== null) {
			$data->right = $this->right;
		}
		return $data;
	}
}
