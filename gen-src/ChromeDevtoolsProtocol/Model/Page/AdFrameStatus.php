<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Indicates whether a frame has been identified as an ad and why.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdFrameStatus implements \JsonSerializable
{
	/** @var string */
	public $adFrameType;

	/** @var string[]|null */
	public $explanations;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->adFrameType)) {
			$instance->adFrameType = (string)$data->adFrameType;
		}
		if (isset($data->explanations)) {
			$instance->explanations = [];
		if (isset($data->explanations)) {
			$instance->explanations = [];
			foreach ($data->explanations as $item) {
				$instance->explanations[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->adFrameType !== null) {
			$data->adFrameType = $this->adFrameType;
		}
		if ($this->explanations !== null) {
			$data->explanations = [];
		if ($this->explanations !== null) {
			$data->explanations = [];
			foreach ($this->explanations as $item) {
				$data->explanations[] = $item;
			}
		}
		}
		return $data;
	}
}
