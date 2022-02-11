<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired for failed bfcache history navigations if BackForwardCache feature is enabled. Do not assume any ordering with the Page.frameNavigated event. This event is fired only for main-frame history navigation where the document changes (non-same-document navigations), when bfcache navigation fails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BackForwardCacheNotUsedEvent implements \JsonSerializable
{
	/**
	 * The loader id for the associated navgation.
	 *
	 * @var string
	 */
	public $loaderId;

	/**
	 * The frame id of the associated frame.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Array of reasons why the page could not be cached. This must not be empty.
	 *
	 * @var BackForwardCacheNotRestoredExplanation[]
	 */
	public $notRestoredExplanations;

	/**
	 * Tree structure of reasons why the page could not be cached for each frame.
	 *
	 * @var BackForwardCacheNotRestoredExplanationTree|null
	 */
	public $notRestoredExplanationsTree;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->notRestoredExplanations)) {
			$instance->notRestoredExplanations = [];
			foreach ($data->notRestoredExplanations as $item) {
				$instance->notRestoredExplanations[] = BackForwardCacheNotRestoredExplanation::fromJson($item);
			}
		}
		if (isset($data->notRestoredExplanationsTree)) {
			$instance->notRestoredExplanationsTree = BackForwardCacheNotRestoredExplanationTree::fromJson($data->notRestoredExplanationsTree);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->notRestoredExplanations !== null) {
			$data->notRestoredExplanations = [];
			foreach ($this->notRestoredExplanations as $item) {
				$data->notRestoredExplanations[] = $item->jsonSerialize();
			}
		}
		if ($this->notRestoredExplanationsTree !== null) {
			$data->notRestoredExplanationsTree = $this->notRestoredExplanationsTree->jsonSerialize();
		}
		return $data;
	}
}
