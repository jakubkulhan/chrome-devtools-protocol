<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * DOM interaction is implemented in terms of mirror objects that represent the actual DOM nodes. DOMNode is a base node mirror type.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Node implements \JsonSerializable
{
	/**
	 * Node identifier that is passed into the rest of the DOM messages as the `nodeId`. Backend will only push node with given `id` once. It is aware of all requested nodes and will only fire DOM events for nodes known to the client.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * The id of the parent node if any.
	 *
	 * @var int
	 */
	public $parentId;

	/**
	 * The BackendNodeId for this node.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * `Node`'s nodeType.
	 *
	 * @var int
	 */
	public $nodeType;

	/**
	 * `Node`'s nodeName.
	 *
	 * @var string
	 */
	public $nodeName;

	/**
	 * `Node`'s localName.
	 *
	 * @var string
	 */
	public $localName;

	/**
	 * `Node`'s nodeValue.
	 *
	 * @var string
	 */
	public $nodeValue;

	/**
	 * Child count for `Container` nodes.
	 *
	 * @var int|null
	 */
	public $childNodeCount;

	/**
	 * Child nodes of this node when requested with children.
	 *
	 * @var Node[]|null
	 */
	public $children;

	/**
	 * Attributes of the `Element` node in the form of flat array `[name1, value1, name2, value2]`.
	 *
	 * @var string[]|null
	 */
	public $attributes;

	/**
	 * Document URL that `Document` or `FrameOwner` node points to.
	 *
	 * @var string|null
	 */
	public $documentURL;

	/**
	 * Base URL that `Document` or `FrameOwner` node uses for URL completion.
	 *
	 * @var string|null
	 */
	public $baseURL;

	/**
	 * `DocumentType`'s publicId.
	 *
	 * @var string|null
	 */
	public $publicId;

	/**
	 * `DocumentType`'s systemId.
	 *
	 * @var string|null
	 */
	public $systemId;

	/**
	 * `DocumentType`'s internalSubset.
	 *
	 * @var string|null
	 */
	public $internalSubset;

	/**
	 * `Document`'s XML version in case of XML documents.
	 *
	 * @var string|null
	 */
	public $xmlVersion;

	/**
	 * `Attr`'s name.
	 *
	 * @var string|null
	 */
	public $name;

	/**
	 * `Attr`'s value.
	 *
	 * @var string|null
	 */
	public $value;

	/**
	 * Pseudo element type for this node.
	 *
	 * @var string
	 */
	public $pseudoType;

	/**
	 * Shadow root type.
	 *
	 * @var string
	 */
	public $shadowRootType;

	/**
	 * Frame ID for frame owner elements.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Content document for frame owner elements.
	 *
	 * @var Node|null
	 */
	public $contentDocument;

	/**
	 * Shadow root list for given element host.
	 *
	 * @var Node[]|null
	 */
	public $shadowRoots;

	/**
	 * Content document fragment for template elements.
	 *
	 * @var Node|null
	 */
	public $templateContent;

	/**
	 * Pseudo elements associated with this node.
	 *
	 * @var Node[]|null
	 */
	public $pseudoElements;

	/**
	 * Deprecated, as the HTML Imports API has been removed (crbug.com/937746). This property used to return the imported document for the HTMLImport links. The property is always undefined now.
	 *
	 * @var Node|null
	 */
	public $importedDocument;

	/**
	 * Distributed nodes for given insertion point.
	 *
	 * @var BackendNode[]|null
	 */
	public $distributedNodes;

	/**
	 * Whether the node is SVG.
	 *
	 * @var bool|null
	 */
	public $isSVG;

	/** @var string */
	public $compatibilityMode;

	/** @var BackendNode|null */
	public $assignedSlot;


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
		if (isset($data->parentId)) {
			$instance->parentId = (int)$data->parentId;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->nodeType)) {
			$instance->nodeType = (int)$data->nodeType;
		}
		if (isset($data->nodeName)) {
			$instance->nodeName = (string)$data->nodeName;
		}
		if (isset($data->localName)) {
			$instance->localName = (string)$data->localName;
		}
		if (isset($data->nodeValue)) {
			$instance->nodeValue = (string)$data->nodeValue;
		}
		if (isset($data->childNodeCount)) {
			$instance->childNodeCount = (int)$data->childNodeCount;
		}
		if (isset($data->children)) {
			$instance->children = [];
			foreach ($data->children as $item) {
				$instance->children[] = Node::fromJson($item);
			}
		}
		if (isset($data->attributes)) {
			$instance->attributes = [];
			foreach ($data->attributes as $item) {
				$instance->attributes[] = (string)$item;
			}
		}
		if (isset($data->documentURL)) {
			$instance->documentURL = (string)$data->documentURL;
		}
		if (isset($data->baseURL)) {
			$instance->baseURL = (string)$data->baseURL;
		}
		if (isset($data->publicId)) {
			$instance->publicId = (string)$data->publicId;
		}
		if (isset($data->systemId)) {
			$instance->systemId = (string)$data->systemId;
		}
		if (isset($data->internalSubset)) {
			$instance->internalSubset = (string)$data->internalSubset;
		}
		if (isset($data->xmlVersion)) {
			$instance->xmlVersion = (string)$data->xmlVersion;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		if (isset($data->pseudoType)) {
			$instance->pseudoType = (string)$data->pseudoType;
		}
		if (isset($data->shadowRootType)) {
			$instance->shadowRootType = (string)$data->shadowRootType;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->contentDocument)) {
			$instance->contentDocument = Node::fromJson($data->contentDocument);
		}
		if (isset($data->shadowRoots)) {
			$instance->shadowRoots = [];
			foreach ($data->shadowRoots as $item) {
				$instance->shadowRoots[] = Node::fromJson($item);
			}
		}
		if (isset($data->templateContent)) {
			$instance->templateContent = Node::fromJson($data->templateContent);
		}
		if (isset($data->pseudoElements)) {
			$instance->pseudoElements = [];
			foreach ($data->pseudoElements as $item) {
				$instance->pseudoElements[] = Node::fromJson($item);
			}
		}
		if (isset($data->importedDocument)) {
			$instance->importedDocument = Node::fromJson($data->importedDocument);
		}
		if (isset($data->distributedNodes)) {
			$instance->distributedNodes = [];
			foreach ($data->distributedNodes as $item) {
				$instance->distributedNodes[] = BackendNode::fromJson($item);
			}
		}
		if (isset($data->isSVG)) {
			$instance->isSVG = (bool)$data->isSVG;
		}
		if (isset($data->compatibilityMode)) {
			$instance->compatibilityMode = (string)$data->compatibilityMode;
		}
		if (isset($data->assignedSlot)) {
			$instance->assignedSlot = BackendNode::fromJson($data->assignedSlot);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->parentId !== null) {
			$data->parentId = $this->parentId;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->nodeType !== null) {
			$data->nodeType = $this->nodeType;
		}
		if ($this->nodeName !== null) {
			$data->nodeName = $this->nodeName;
		}
		if ($this->localName !== null) {
			$data->localName = $this->localName;
		}
		if ($this->nodeValue !== null) {
			$data->nodeValue = $this->nodeValue;
		}
		if ($this->childNodeCount !== null) {
			$data->childNodeCount = $this->childNodeCount;
		}
		if ($this->children !== null) {
			$data->children = [];
			foreach ($this->children as $item) {
				$data->children[] = $item->jsonSerialize();
			}
		}
		if ($this->attributes !== null) {
			$data->attributes = [];
			foreach ($this->attributes as $item) {
				$data->attributes[] = $item;
			}
		}
		if ($this->documentURL !== null) {
			$data->documentURL = $this->documentURL;
		}
		if ($this->baseURL !== null) {
			$data->baseURL = $this->baseURL;
		}
		if ($this->publicId !== null) {
			$data->publicId = $this->publicId;
		}
		if ($this->systemId !== null) {
			$data->systemId = $this->systemId;
		}
		if ($this->internalSubset !== null) {
			$data->internalSubset = $this->internalSubset;
		}
		if ($this->xmlVersion !== null) {
			$data->xmlVersion = $this->xmlVersion;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->pseudoType !== null) {
			$data->pseudoType = $this->pseudoType;
		}
		if ($this->shadowRootType !== null) {
			$data->shadowRootType = $this->shadowRootType;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->contentDocument !== null) {
			$data->contentDocument = $this->contentDocument->jsonSerialize();
		}
		if ($this->shadowRoots !== null) {
			$data->shadowRoots = [];
			foreach ($this->shadowRoots as $item) {
				$data->shadowRoots[] = $item->jsonSerialize();
			}
		}
		if ($this->templateContent !== null) {
			$data->templateContent = $this->templateContent->jsonSerialize();
		}
		if ($this->pseudoElements !== null) {
			$data->pseudoElements = [];
			foreach ($this->pseudoElements as $item) {
				$data->pseudoElements[] = $item->jsonSerialize();
			}
		}
		if ($this->importedDocument !== null) {
			$data->importedDocument = $this->importedDocument->jsonSerialize();
		}
		if ($this->distributedNodes !== null) {
			$data->distributedNodes = [];
			foreach ($this->distributedNodes as $item) {
				$data->distributedNodes[] = $item->jsonSerialize();
			}
		}
		if ($this->isSVG !== null) {
			$data->isSVG = $this->isSVG;
		}
		if ($this->compatibilityMode !== null) {
			$data->compatibilityMode = $this->compatibilityMode;
		}
		if ($this->assignedSlot !== null) {
			$data->assignedSlot = $this->assignedSlot->jsonSerialize();
		}
		return $data;
	}
}
