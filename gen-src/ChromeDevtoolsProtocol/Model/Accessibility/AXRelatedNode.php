<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Named type Accessibility.AXRelatedNode.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AXRelatedNode implements \JsonSerializable
{
	/**
	 * The BackendNodeId of the related DOM node.
	 *
	 * @var int
	 */
	public $backendDOMNodeId;

	/**
	 * The IDRef value provided, if any.
	 *
	 * @var string|null
	 */
	public $idref;

	/**
	 * The text alternative of this node in the current context.
	 *
	 * @var string|null
	 */
	public $text;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->backendDOMNodeId)) {
			$instance->backendDOMNodeId = (int)$data->backendDOMNodeId;
		}
		if (isset($data->idref)) {
			$instance->idref = (string)$data->idref;
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->backendDOMNodeId !== null) {
			$data->backendDOMNodeId = $this->backendDOMNodeId;
		}
		if ($this->idref !== null) {
			$data->idref = $this->idref;
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		return $data;
	}
}
