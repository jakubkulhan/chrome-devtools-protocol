<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Configuration for Window Controls Overlay
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WindowControlsOverlayConfig implements \JsonSerializable
{
	/**
	 * Whether the title bar CSS should be shown when emulating the Window Controls Overlay.
	 *
	 * @var bool
	 */
	public $showCSS;

	/**
	 * Seleted platforms to show the overlay.
	 *
	 * @var string
	 */
	public $selectedPlatform;

	/**
	 * The theme color defined in app manifest.
	 *
	 * @var string
	 */
	public $themeColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->showCSS)) {
			$instance->showCSS = (bool)$data->showCSS;
		}
		if (isset($data->selectedPlatform)) {
			$instance->selectedPlatform = (string)$data->selectedPlatform;
		}
		if (isset($data->themeColor)) {
			$instance->themeColor = (string)$data->themeColor;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->showCSS !== null) {
			$data->showCSS = $this->showCSS;
		}
		if ($this->selectedPlatform !== null) {
			$data->selectedPlatform = $this->selectedPlatform;
		}
		if ($this->themeColor !== null) {
			$data->themeColor = $this->themeColor;
		}
		return $data;
	}
}
