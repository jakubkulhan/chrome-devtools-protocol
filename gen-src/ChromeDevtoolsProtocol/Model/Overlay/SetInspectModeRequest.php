<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setInspectMode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInspectModeRequest implements \JsonSerializable
{
	/**
	 * Set an inspection mode.
	 *
	 * @var string
	 */
	public $mode;

	/**
	 * A descriptor for the highlight appearance of hovered-over nodes. May be omitted if `enabled == false`.
	 *
	 * @var HighlightConfig|null
	 */
	public $highlightConfig;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->mode)) {
			$instance->mode = (string)$data->mode;
		}
		if (isset($data->highlightConfig)) {
			$instance->highlightConfig = HighlightConfig::fromJson($data->highlightConfig);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->mode !== null) {
			$data->mode = $this->mode;
		}
		if ($this->highlightConfig !== null) {
			$data->highlightConfig = $this->highlightConfig->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetInspectModeRequestBuilder
	 */
	public static function builder(): SetInspectModeRequestBuilder
	{
		return new SetInspectModeRequestBuilder();
	}
}
