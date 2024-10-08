<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getNodesForSubtreeByStyle command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetNodesForSubtreeByStyleRequest implements \JsonSerializable
{
	/**
	 * Node ID pointing to the root of a subtree.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * The style to filter nodes by (includes nodes if any of properties matches).
	 *
	 * @var CSSComputedStyleProperty[]
	 */
	public $computedStyles;

	/**
	 * Whether or not iframes and shadow roots in the same target should be traversed when returning the results (default is false).
	 *
	 * @var bool|null
	 */
	public $pierce;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->computedStyles)) {
			$instance->computedStyles = [];
			foreach ($data->computedStyles as $item) {
				$instance->computedStyles[] = CSSComputedStyleProperty::fromJson($item);
			}
		}
		if (isset($data->pierce)) {
			$instance->pierce = (bool)$data->pierce;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->computedStyles !== null) {
			$data->computedStyles = [];
			foreach ($this->computedStyles as $item) {
				$data->computedStyles[] = $item->jsonSerialize();
			}
		}
		if ($this->pierce !== null) {
			$data->pierce = $this->pierce;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetNodesForSubtreeByStyleRequestBuilder
	 */
	public static function builder(): GetNodesForSubtreeByStyleRequestBuilder
	{
		return new GetNodesForSubtreeByStyleRequestBuilder();
	}
}
