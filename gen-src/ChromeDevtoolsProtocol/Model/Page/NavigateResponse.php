<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.navigate command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NavigateResponse implements \JsonSerializable
{
	/**
	 * Frame id that has navigated (or failed to navigate)
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Loader identifier. This is omitted in case of same-document navigation, as the previously committed loaderId would not change.
	 *
	 * @var string
	 */
	public $loaderId;

	/**
	 * User friendly error message, present if and only if navigation has failed.
	 *
	 * @var string|null
	 */
	public $errorText;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		if (isset($data->errorText)) {
			$instance->errorText = (string)$data->errorText;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		if ($this->errorText !== null) {
			$data->errorText = $this->errorText;
		}
		return $data;
	}
}
