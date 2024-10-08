<?php

namespace ChromeDevtoolsProtocol\Model\HeadlessExperimental;

/**
 * Response to HeadlessExperimental.beginFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BeginFrameResponse implements \JsonSerializable
{
	/**
	 * Whether the BeginFrame resulted in damage and, thus, a new frame was committed to the display. Reported for diagnostic uses, may be removed in the future.
	 *
	 * @var bool
	 */
	public $hasDamage;

	/**
	 * Base64-encoded image data of the screenshot, if one was requested and successfully taken. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $screenshotData;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->hasDamage)) {
			$instance->hasDamage = (bool)$data->hasDamage;
		}
		if (isset($data->screenshotData)) {
			$instance->screenshotData = (string)$data->screenshotData;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->hasDamage !== null) {
			$data->hasDamage = $this->hasDamage;
		}
		if ($this->screenshotData !== null) {
			$data->screenshotData = $this->screenshotData;
		}
		return $data;
	}
}
