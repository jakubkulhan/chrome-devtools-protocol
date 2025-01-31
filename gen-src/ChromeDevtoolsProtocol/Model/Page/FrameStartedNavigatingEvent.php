<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when a navigation starts. This event is fired for both renderer-initiated and browser-initiated navigations. For renderer-initiated navigations, the event is fired after `frameRequestedNavigation`. Navigation may still be cancelled after the event is issued. Multiple events can be fired for a single navigation, for example, when a same-document navigation becomes a cross-document navigation (such as in the case of a frameset).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameStartedNavigatingEvent implements \JsonSerializable
{
	/**
	 * ID of the frame that is being navigated.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * The URL the navigation started with. The final URL can be different.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Loader identifier. Even though it is present in case of same-document navigation, the previously committed loaderId would not change unless the navigation changes from a same-document to a cross-document navigation.
	 *
	 * @var string
	 */
	public $loaderId;

	/** @var string */
	public $navigationType;


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
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		if (isset($data->navigationType)) {
			$instance->navigationType = (string)$data->navigationType;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		if ($this->navigationType !== null) {
			$data->navigationType = $this->navigationType;
		}
		return $data;
	}
}
