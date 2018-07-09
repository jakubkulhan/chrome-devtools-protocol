<?php
namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Response to DOMSnapshot.captureSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CaptureSnapshotResponse implements \JsonSerializable
{
	/**
	 * The nodes in the DOM tree. The DOMNode at index 0 corresponds to the root document.
	 *
	 * @var DOMTreeSnapshot
	 */
	public $nodes;

	/**
	 * The nodes in the layout tree.
	 *
	 * @var LayoutTreeSnapshot
	 */
	public $layout;

	/**
	 * Shared string table that all string properties refer to with indexes.
	 *
	 * @var string[]
	 */
	public $strings;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodes)) {
			$instance->nodes = DOMTreeSnapshot::fromJson($data->nodes);
		}
		if (isset($data->layout)) {
			$instance->layout = LayoutTreeSnapshot::fromJson($data->layout);
		}
		if (isset($data->strings)) {
			$instance->strings = [];
			foreach ($data->strings as $item) {
				$instance->strings[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodes !== null) {
			$data->nodes = $this->nodes->jsonSerialize();
		}
		if ($this->layout !== null) {
			$data->layout = $this->layout->jsonSerialize();
		}
		if ($this->strings !== null) {
			$data->strings = [];
			foreach ($this->strings as $item) {
				$data->strings[] = $item;
			}
		}
		return $data;
	}
}
