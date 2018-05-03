<?php
namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.createTarget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateTargetRequest implements \JsonSerializable
{
	/**
	 * The initial URL the page will be navigated to.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Frame width in DIP (headless chrome only).
	 *
	 * @var int|null
	 */
	public $width;

	/**
	 * Frame height in DIP (headless chrome only).
	 *
	 * @var int|null
	 */
	public $height;

	/**
	 * The browser context to create the page in.
	 *
	 * @var string
	 */
	public $browserContextId;

	/**
	 * Whether BeginFrames for this target will be controlled via DevTools (headless chrome only, not supported on MacOS yet, false by default).
	 *
	 * @var bool|null
	 */
	public $enableBeginFrameControl;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->width)) {
			$instance->width = (int)$data->width;
		}
		if (isset($data->height)) {
			$instance->height = (int)$data->height;
		}
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
		}
		if (isset($data->enableBeginFrameControl)) {
			$instance->enableBeginFrameControl = (bool)$data->enableBeginFrameControl;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		if ($this->enableBeginFrameControl !== null) {
			$data->enableBeginFrameControl = $this->enableBeginFrameControl;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CreateTargetRequestBuilder
	 */
	public static function builder(): CreateTargetRequestBuilder
	{
		return new CreateTargetRequestBuilder();
	}
}
