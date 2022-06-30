<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Emitted only when `page.interceptFileChooser` is enabled.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FileChooserOpenedEvent implements \JsonSerializable
{
	/**
	 * Id of the frame containing input node.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Input mode.
	 *
	 * @var string
	 */
	public $mode;

	/**
	 * Input node id. Only present for file choosers opened via an <input type="file"> element.
	 *
	 * @var int
	 */
	public $backendNodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->mode)) {
			$instance->mode = (string)$data->mode;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->mode !== null) {
			$data->mode = $this->mode;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		return $data;
	}
}
