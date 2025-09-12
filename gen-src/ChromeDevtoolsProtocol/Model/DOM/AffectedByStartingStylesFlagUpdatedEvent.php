<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Fired when a node's starting styles changes.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AffectedByStartingStylesFlagUpdatedEvent implements \JsonSerializable
{
	/**
	 * The id of the node.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * If the node has starting styles.
	 *
	 * @var bool
	 */
	public $affectedByStartingStyles;


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
		if (isset($data->affectedByStartingStyles)) {
			$instance->affectedByStartingStyles = (bool)$data->affectedByStartingStyles;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->affectedByStartingStyles !== null) {
			$data->affectedByStartingStyles = $this->affectedByStartingStyles;
		}
		return $data;
	}
}
