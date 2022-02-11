<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Table containing nodes.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NodeTreeSnapshot implements \JsonSerializable
{
	/**
	 * Parent node index.
	 *
	 * @var int[]|null
	 */
	public $parentIndex;

	/**
	 * `Node`'s nodeType.
	 *
	 * @var int[]|null
	 */
	public $nodeType;

	/**
	 * Type of the shadow root the `Node` is in. String values are equal to the `ShadowRootType` enum.
	 *
	 * @var RareStringData|null
	 */
	public $shadowRootType;

	/**
	 * `Node`'s nodeName.
	 *
	 * @var int[]|null
	 */
	public $nodeName;

	/**
	 * `Node`'s nodeValue.
	 *
	 * @var int[]|null
	 */
	public $nodeValue;

	/**
	 * `Node`'s id, corresponds to DOM.Node.backendNodeId.
	 *
	 * @var int[]|null
	 */
	public $backendNodeId;

	/**
	 * Attributes of an `Element` node. Flatten name, value pairs.
	 *
	 * @var int[][]|null
	 */
	public $attributes;

	/**
	 * Only set for textarea elements, contains the text value.
	 *
	 * @var RareStringData|null
	 */
	public $textValue;

	/**
	 * Only set for input elements, contains the input's associated text value.
	 *
	 * @var RareStringData|null
	 */
	public $inputValue;

	/**
	 * Only set for radio and checkbox input elements, indicates if the element has been checked
	 *
	 * @var RareBooleanData|null
	 */
	public $inputChecked;

	/**
	 * Only set for option elements, indicates if the element has been selected
	 *
	 * @var RareBooleanData|null
	 */
	public $optionSelected;

	/**
	 * The index of the document in the list of the snapshot documents.
	 *
	 * @var RareIntegerData|null
	 */
	public $contentDocumentIndex;

	/**
	 * Type of a pseudo element node.
	 *
	 * @var RareStringData|null
	 */
	public $pseudoType;

	/**
	 * Whether this DOM node responds to mouse clicks. This includes nodes that have had click event listeners attached via JavaScript as well as anchor tags that naturally navigate when clicked.
	 *
	 * @var RareBooleanData|null
	 */
	public $isClickable;

	/**
	 * The selected url for nodes with a srcset attribute.
	 *
	 * @var RareStringData|null
	 */
	public $currentSourceURL;

	/**
	 * The url of the script (if any) that generates this node.
	 *
	 * @var RareStringData|null
	 */
	public $originURL;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->parentIndex)) {
			$instance->parentIndex = [];
			foreach ($data->parentIndex as $item) {
				$instance->parentIndex[] = (int)$item;
			}
		}
		if (isset($data->nodeType)) {
			$instance->nodeType = [];
			foreach ($data->nodeType as $item) {
				$instance->nodeType[] = (int)$item;
			}
		}
		if (isset($data->shadowRootType)) {
			$instance->shadowRootType = RareStringData::fromJson($data->shadowRootType);
		}
		if (isset($data->nodeName)) {
			$instance->nodeName = [];
		if (isset($data->nodeName)) {
			$instance->nodeName = [];
			foreach ($data->nodeName as $item) {
				$instance->nodeName[] = (int)$item;
			}
		}
		}
		if (isset($data->nodeValue)) {
			$instance->nodeValue = [];
		if (isset($data->nodeValue)) {
			$instance->nodeValue = [];
			foreach ($data->nodeValue as $item) {
				$instance->nodeValue[] = (int)$item;
			}
		}
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = [];
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = [];
			foreach ($data->backendNodeId as $item) {
				$instance->backendNodeId[] = (int)$item;
			}
		}
		}
		if (isset($data->attributes)) {
			$instance->attributes = [];
		if (isset($data->attributes)) {
			$instance->attributes = [];
			foreach ($data->attributes as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = (int)$nestedItem;
				}
				$instance->attributes[] = $nested;
			}
		}
		}
		if (isset($data->textValue)) {
			$instance->textValue = RareStringData::fromJson($data->textValue);
		}
		if (isset($data->inputValue)) {
			$instance->inputValue = RareStringData::fromJson($data->inputValue);
		}
		if (isset($data->inputChecked)) {
			$instance->inputChecked = RareBooleanData::fromJson($data->inputChecked);
		}
		if (isset($data->optionSelected)) {
			$instance->optionSelected = RareBooleanData::fromJson($data->optionSelected);
		}
		if (isset($data->contentDocumentIndex)) {
			$instance->contentDocumentIndex = RareIntegerData::fromJson($data->contentDocumentIndex);
		}
		if (isset($data->pseudoType)) {
			$instance->pseudoType = RareStringData::fromJson($data->pseudoType);
		}
		if (isset($data->isClickable)) {
			$instance->isClickable = RareBooleanData::fromJson($data->isClickable);
		}
		if (isset($data->currentSourceURL)) {
			$instance->currentSourceURL = RareStringData::fromJson($data->currentSourceURL);
		}
		if (isset($data->originURL)) {
			$instance->originURL = RareStringData::fromJson($data->originURL);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->parentIndex !== null) {
			$data->parentIndex = [];
			foreach ($this->parentIndex as $item) {
				$data->parentIndex[] = $item;
			}
		}
		if ($this->nodeType !== null) {
			$data->nodeType = [];
			foreach ($this->nodeType as $item) {
				$data->nodeType[] = $item;
			}
		}
		if ($this->shadowRootType !== null) {
			$data->shadowRootType = $this->shadowRootType->jsonSerialize();
		}
		if ($this->nodeName !== null) {
			$data->nodeName = [];
		if ($this->nodeName !== null) {
			$data->nodeName = [];
			foreach ($this->nodeName as $item) {
				$data->nodeName[] = $item;
			}
		}
		}
		if ($this->nodeValue !== null) {
			$data->nodeValue = [];
		if ($this->nodeValue !== null) {
			$data->nodeValue = [];
			foreach ($this->nodeValue as $item) {
				$data->nodeValue[] = $item;
			}
		}
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = [];
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = [];
			foreach ($this->backendNodeId as $item) {
				$data->backendNodeId[] = $item;
			}
		}
		}
		if ($this->attributes !== null) {
			$data->attributes = [];
		if ($this->attributes !== null) {
			$data->attributes = [];
			foreach ($this->attributes as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->attributes[] = $nested;
			}
		}
		}
		if ($this->textValue !== null) {
			$data->textValue = $this->textValue->jsonSerialize();
		}
		if ($this->inputValue !== null) {
			$data->inputValue = $this->inputValue->jsonSerialize();
		}
		if ($this->inputChecked !== null) {
			$data->inputChecked = $this->inputChecked->jsonSerialize();
		}
		if ($this->optionSelected !== null) {
			$data->optionSelected = $this->optionSelected->jsonSerialize();
		}
		if ($this->contentDocumentIndex !== null) {
			$data->contentDocumentIndex = $this->contentDocumentIndex->jsonSerialize();
		}
		if ($this->pseudoType !== null) {
			$data->pseudoType = $this->pseudoType->jsonSerialize();
		}
		if ($this->isClickable !== null) {
			$data->isClickable = $this->isClickable->jsonSerialize();
		}
		if ($this->currentSourceURL !== null) {
			$data->currentSourceURL = $this->currentSourceURL->jsonSerialize();
		}
		if ($this->originURL !== null) {
			$data->originURL = $this->originURL->jsonSerialize();
		}
		return $data;
	}
}
