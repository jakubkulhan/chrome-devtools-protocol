<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Request for DOMSnapshot.getSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSnapshotRequest implements \JsonSerializable
{
	/**
	 * Whitelist of computed styles to return.
	 *
	 * @var string[]
	 */
	public $computedStyleWhitelist;

	/**
	 * Whether or not to retrieve details of DOM listeners (default false).
	 *
	 * @var bool|null
	 */
	public $includeEventListeners;

	/**
	 * Whether to determine and include the paint order index of LayoutTreeNodes (default false).
	 *
	 * @var bool|null
	 */
	public $includePaintOrder;

	/**
	 * Whether to include UA shadow tree in the snapshot (default false).
	 *
	 * @var bool|null
	 */
	public $includeUserAgentShadowTree;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->computedStyleWhitelist)) {
			$instance->computedStyleWhitelist = [];
			foreach ($data->computedStyleWhitelist as $item) {
				$instance->computedStyleWhitelist[] = (string)$item;
			}
		}
		if (isset($data->includeEventListeners)) {
			$instance->includeEventListeners = (bool)$data->includeEventListeners;
		}
		if (isset($data->includePaintOrder)) {
			$instance->includePaintOrder = (bool)$data->includePaintOrder;
		}
		if (isset($data->includeUserAgentShadowTree)) {
			$instance->includeUserAgentShadowTree = (bool)$data->includeUserAgentShadowTree;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->computedStyleWhitelist !== null) {
			$data->computedStyleWhitelist = [];
			foreach ($this->computedStyleWhitelist as $item) {
				$data->computedStyleWhitelist[] = $item;
			}
		}
		if ($this->includeEventListeners !== null) {
			$data->includeEventListeners = $this->includeEventListeners;
		}
		if ($this->includePaintOrder !== null) {
			$data->includePaintOrder = $this->includePaintOrder;
		}
		if ($this->includeUserAgentShadowTree !== null) {
			$data->includeUserAgentShadowTree = $this->includeUserAgentShadowTree;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetSnapshotRequestBuilder
	 */
	public static function builder(): GetSnapshotRequestBuilder
	{
		return new GetSnapshotRequestBuilder();
	}
}
