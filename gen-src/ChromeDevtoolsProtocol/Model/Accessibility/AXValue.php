<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * A single computed AX property.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AXValue implements \JsonSerializable
{
	/**
	 * The type of this value.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * The computed value of this property.
	 *
	 * @var mixed|null
	 */
	public $value;

	/**
	 * One or more related nodes, if applicable.
	 *
	 * @var AXRelatedNode[]|null
	 */
	public $relatedNodes;

	/**
	 * The sources which contributed to the computation of this property.
	 *
	 * @var AXValueSource[]|null
	 */
	public $sources;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->value)) {
			$instance->value = $data->value;
		}
		if (isset($data->relatedNodes)) {
			$instance->relatedNodes = [];
			foreach ($data->relatedNodes as $item) {
				$instance->relatedNodes[] = AXRelatedNode::fromJson($item);
			}
		}
		if (isset($data->sources)) {
			$instance->sources = [];
			foreach ($data->sources as $item) {
				$instance->sources[] = AXValueSource::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->relatedNodes !== null) {
			$data->relatedNodes = [];
			foreach ($this->relatedNodes as $item) {
				$data->relatedNodes[] = $item->jsonSerialize();
			}
		}
		if ($this->sources !== null) {
			$data->sources = [];
			foreach ($this->sources as $item) {
				$data->sources[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
