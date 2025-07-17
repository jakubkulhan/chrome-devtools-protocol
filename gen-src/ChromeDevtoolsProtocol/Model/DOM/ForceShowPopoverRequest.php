<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.forceShowPopover command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ForceShowPopoverRequest implements \JsonSerializable
{
	/**
	 * Id of the popover HTMLElement
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * If true, opens the popover and keeps it open. If false, closes the popover if it was previously force-opened.
	 *
	 * @var bool
	 */
	public $enable;


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
		if (isset($data->enable)) {
			$instance->enable = (bool)$data->enable;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->enable !== null) {
			$data->enable = $this->enable;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ForceShowPopoverRequestBuilder
	 */
	public static function builder(): ForceShowPopoverRequestBuilder
	{
		return new ForceShowPopoverRequestBuilder();
	}
}
