<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Request for LayerTree.compositingReasons command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CompositingReasonsRequest implements \JsonSerializable
{
	/**
	 * The id of the layer for which we want to get the reasons it was composited.
	 *
	 * @var string
	 */
	public $layerId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->layerId)) {
			$instance->layerId = (string)$data->layerId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->layerId !== null) {
			$data->layerId = $this->layerId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CompositingReasonsRequestBuilder
	 */
	public static function builder(): CompositingReasonsRequestBuilder
	{
		return new CompositingReasonsRequestBuilder();
	}
}
