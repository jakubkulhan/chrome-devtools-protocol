<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired for all history navigations if BackForwardCache feature is enabled. Do not assume any ordering with the Page.frameNavigated event. This event is fired only for main-frame history navigation where the document changes (non-same-document navigations).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HistoryNavigationOutcomeReportedEvent implements \JsonSerializable
{
	/**
	 * The request id of the associated navigation.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * The frame id of the associated frame.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Indicates whether the frame is restored from BackForwardCache.
	 *
	 * @var bool
	 */
	public $isRestoredFromBackForwardCache;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->isRestoredFromBackForwardCache)) {
			$instance->isRestoredFromBackForwardCache = (bool)$data->isRestoredFromBackForwardCache;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->isRestoredFromBackForwardCache !== null) {
			$data->isRestoredFromBackForwardCache = $this->isRestoredFromBackForwardCache;
		}
		return $data;
	}
}
