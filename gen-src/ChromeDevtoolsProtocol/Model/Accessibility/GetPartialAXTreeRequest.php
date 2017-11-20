<?php
namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Request for Accessibility.getPartialAXTree command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPartialAXTreeRequest implements \JsonSerializable
{
	/**
	 * ID of node to get the partial accessibility tree for.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Whether to fetch this nodes ancestors, siblings and children. Defaults to true.
	 *
	 * @var bool|null
	 */
	public $fetchRelatives;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->fetchRelatives)) {
			$instance->fetchRelatives = (bool)$data->fetchRelatives;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->fetchRelatives !== null) {
			$data->fetchRelatives = $this->fetchRelatives;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetPartialAXTreeRequestBuilder
	 */
	public static function builder(): GetPartialAXTreeRequestBuilder
	{
		return new GetPartialAXTreeRequestBuilder();
	}
}
