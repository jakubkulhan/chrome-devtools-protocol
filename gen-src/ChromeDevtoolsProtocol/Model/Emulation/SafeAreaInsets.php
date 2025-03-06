<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Named type Emulation.SafeAreaInsets.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SafeAreaInsets implements \JsonSerializable
{
	/**
	 * Overrides safe-area-inset-top.
	 *
	 * @var int|null
	 */
	public $top;

	/**
	 * Overrides safe-area-max-inset-top.
	 *
	 * @var int|null
	 */
	public $topMax;

	/**
	 * Overrides safe-area-inset-left.
	 *
	 * @var int|null
	 */
	public $left;

	/**
	 * Overrides safe-area-max-inset-left.
	 *
	 * @var int|null
	 */
	public $leftMax;

	/**
	 * Overrides safe-area-inset-bottom.
	 *
	 * @var int|null
	 */
	public $bottom;

	/**
	 * Overrides safe-area-max-inset-bottom.
	 *
	 * @var int|null
	 */
	public $bottomMax;

	/**
	 * Overrides safe-area-inset-right.
	 *
	 * @var int|null
	 */
	public $right;

	/**
	 * Overrides safe-area-max-inset-right.
	 *
	 * @var int|null
	 */
	public $rightMax;


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
		if (isset($data->topMax)) {
			$instance->topMax = (int)$data->topMax;
		}
		if (isset($data->left)) {
			$instance->left = (int)$data->left;
		}
		if (isset($data->leftMax)) {
			$instance->leftMax = (int)$data->leftMax;
		}
		if (isset($data->bottom)) {
			$instance->bottom = (int)$data->bottom;
		}
		if (isset($data->bottomMax)) {
			$instance->bottomMax = (int)$data->bottomMax;
		}
		if (isset($data->right)) {
			$instance->right = (int)$data->right;
		}
		if (isset($data->rightMax)) {
			$instance->rightMax = (int)$data->rightMax;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->top !== null) {
			$data->top = $this->top;
		}
		if ($this->topMax !== null) {
			$data->topMax = $this->topMax;
		}
		if ($this->left !== null) {
			$data->left = $this->left;
		}
		if ($this->leftMax !== null) {
			$data->leftMax = $this->leftMax;
		}
		if ($this->bottom !== null) {
			$data->bottom = $this->bottom;
		}
		if ($this->bottomMax !== null) {
			$data->bottomMax = $this->bottomMax;
		}
		if ($this->right !== null) {
			$data->right = $this->right;
		}
		if ($this->rightMax !== null) {
			$data->rightMax = $this->rightMax;
		}
		return $data;
	}
}
