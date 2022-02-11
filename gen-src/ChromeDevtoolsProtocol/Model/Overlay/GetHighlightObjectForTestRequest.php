<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.getHighlightObjectForTest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHighlightObjectForTestRequest implements \JsonSerializable
{
	/**
	 * Id of the node to get highlight object for.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Whether to include distance info.
	 *
	 * @var bool|null
	 */
	public $includeDistance;

	/**
	 * Whether to include style info.
	 *
	 * @var bool|null
	 */
	public $includeStyle;

	/**
	 * The color format to get config with (default: hex).
	 *
	 * @var string
	 */
	public $colorFormat;

	/**
	 * Whether to show accessibility info (default: true).
	 *
	 * @var bool|null
	 */
	public $showAccessibilityInfo;


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
		if (isset($data->includeDistance)) {
			$instance->includeDistance = (bool)$data->includeDistance;
		}
		if (isset($data->includeStyle)) {
			$instance->includeStyle = (bool)$data->includeStyle;
		}
		if (isset($data->colorFormat)) {
			$instance->colorFormat = (string)$data->colorFormat;
		}
		if (isset($data->showAccessibilityInfo)) {
			$instance->showAccessibilityInfo = (bool)$data->showAccessibilityInfo;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->includeDistance !== null) {
			$data->includeDistance = $this->includeDistance;
		}
		if ($this->includeStyle !== null) {
			$data->includeStyle = $this->includeStyle;
		}
		if ($this->colorFormat !== null) {
			$data->colorFormat = $this->colorFormat;
		}
		if ($this->showAccessibilityInfo !== null) {
			$data->showAccessibilityInfo = $this->showAccessibilityInfo;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetHighlightObjectForTestRequestBuilder
	 */
	public static function builder(): GetHighlightObjectForTestRequestBuilder
	{
		return new GetHighlightObjectForTestRequestBuilder();
	}
}
