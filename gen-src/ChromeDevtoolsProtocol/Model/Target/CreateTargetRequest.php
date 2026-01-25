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
	 * The initial URL the page will be navigated to. An empty string indicates about:blank.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Frame left origin in DIP (requires newWindow to be true or headless shell).
	 *
	 * @var int|null
	 */
	public $left;

	/**
	 * Frame top origin in DIP (requires newWindow to be true or headless shell).
	 *
	 * @var int|null
	 */
	public $top;

	/**
	 * Frame width in DIP (requires newWindow to be true or headless shell).
	 *
	 * @var int|null
	 */
	public $width;

	/**
	 * Frame height in DIP (requires newWindow to be true or headless shell).
	 *
	 * @var int|null
	 */
	public $height;

	/**
	 * Frame window state (requires newWindow to be true or headless shell). Default is normal.
	 *
	 * @var string
	 */
	public $windowState;

	/**
	 * The browser context to create the page in.
	 *
	 * @var string
	 */
	public $browserContextId;

	/**
	 * Whether BeginFrames for this target will be controlled via DevTools (headless shell only, not supported on MacOS yet, false by default).
	 *
	 * @var bool|null
	 */
	public $enableBeginFrameControl;

	/**
	 * Whether to create a new Window or Tab (false by default, not supported by headless shell).
	 *
	 * @var bool|null
	 */
	public $newWindow;

	/**
	 * Whether to create the target in background or foreground (false by default, not supported by headless shell).
	 *
	 * @var bool|null
	 */
	public $background;

	/**
	 * Whether to create the target of type "tab".
	 *
	 * @var bool|null
	 */
	public $forTab;

	/**
	 * Whether to create a hidden target. The hidden target is observable via protocol, but not present in the tab UI strip. Cannot be created with `forTab: true`, `newWindow: true` or `background: false`. The life-time of the tab is limited to the life-time of the session.
	 *
	 * @var bool|null
	 */
	public $hidden;

	/**
	 * If specified, the option is used to determine if the new target should be focused or not. By default, the focus behavior depends on the value of the background field. For example, background=false and focus=false will result in the target tab being opened but the browser window remain unchanged (if it was in the background, it will remain in the background) and background=false with focus=undefined will result in the window being focused. Using background: true and focus: true is not supported and will result in an error.
	 *
	 * @var bool|null
	 */
	public $focus;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->left)) {
			$instance->left = (int)$data->left;
		}
		if (isset($data->top)) {
			$instance->top = (int)$data->top;
		}
		if (isset($data->width)) {
			$instance->width = (int)$data->width;
		}
		if (isset($data->height)) {
			$instance->height = (int)$data->height;
		}
		if (isset($data->windowState)) {
			$instance->windowState = (string)$data->windowState;
		}
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
		}
		if (isset($data->enableBeginFrameControl)) {
			$instance->enableBeginFrameControl = (bool)$data->enableBeginFrameControl;
		}
		if (isset($data->newWindow)) {
			$instance->newWindow = (bool)$data->newWindow;
		}
		if (isset($data->background)) {
			$instance->background = (bool)$data->background;
		}
		if (isset($data->forTab)) {
			$instance->forTab = (bool)$data->forTab;
		}
		if (isset($data->hidden)) {
			$instance->hidden = (bool)$data->hidden;
		}
		if (isset($data->focus)) {
			$instance->focus = (bool)$data->focus;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->left !== null) {
			$data->left = $this->left;
		}
		if ($this->top !== null) {
			$data->top = $this->top;
		}
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		if ($this->windowState !== null) {
			$data->windowState = $this->windowState;
		}
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		if ($this->enableBeginFrameControl !== null) {
			$data->enableBeginFrameControl = $this->enableBeginFrameControl;
		}
		if ($this->newWindow !== null) {
			$data->newWindow = $this->newWindow;
		}
		if ($this->background !== null) {
			$data->background = $this->background;
		}
		if ($this->forTab !== null) {
			$data->forTab = $this->forTab;
		}
		if ($this->hidden !== null) {
			$data->hidden = $this->hidden;
		}
		if ($this->focus !== null) {
			$data->focus = $this->focus;
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
