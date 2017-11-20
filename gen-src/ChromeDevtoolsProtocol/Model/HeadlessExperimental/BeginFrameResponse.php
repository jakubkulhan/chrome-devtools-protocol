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
	 * Whether the BeginFrame resulted in damage and, thus, a new frame was committed to the display.
	 *
	 * @var bool
	 */
	public $hasDamage;

	/**
	 * Whether the main frame submitted a new display frame in response to this BeginFrame.
	 *
	 * @var bool
	 */
	public $mainFrameContentUpdated;

	/**
	 * Base64-encoded image data of the screenshot, if one was requested and successfully taken.
	 *
	 * @var string|null
	 */
	public $screenshotData;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->hasDamage)) {
			$instance->hasDamage = (bool)$data->hasDamage;
		}
		if (isset($data->mainFrameContentUpdated)) {
			$instance->mainFrameContentUpdated = (bool)$data->mainFrameContentUpdated;
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
		if ($this->mainFrameContentUpdated !== null) {
			$data->mainFrameContentUpdated = $this->mainFrameContentUpdated;
		}
		if ($this->screenshotData !== null) {
			$data->screenshotData = $this->screenshotData;
		}
		return $data;
	}
}
