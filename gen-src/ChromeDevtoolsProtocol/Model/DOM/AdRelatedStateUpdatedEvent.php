<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Model\Network\AdProvenance;

/**
 * Fired when a node's ad related state changes.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdRelatedStateUpdatedEvent implements \JsonSerializable
{
	/**
	 * The id of the node.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * The provenance of the ad related node, if it is ad related.
	 *
	 * @var AdProvenance|null
	 */
	public $adProvenance;


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
		if (isset($data->adProvenance)) {
			$instance->adProvenance = AdProvenance::fromJson($data->adProvenance);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->adProvenance !== null) {
			$data->adProvenance = $this->adProvenance->jsonSerialize();
		}
		return $data;
	}
}
