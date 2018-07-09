<?php
namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * DOM tree snapshot.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DOMTreeSnapshot implements \JsonSerializable
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
	 * The index of the node's related layout tree node in the `layoutTreeNodes` array returned by `captureSnapshot`, if any.
	 *
	 * @var int[]|null
	 */
	public $layoutNodeIndex;

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
	 * Document URL that `Document` or `FrameOwner` node points to.
	 *
	 * @var RareStringData|null
	 */
	public $documentURL;

	/**
	 * Base URL that `Document` or `FrameOwner` node uses for URL completion.
	 *
	 * @var RareStringData|null
	 */
	public $baseURL;

	/**
	 * Only set for documents, contains the document's content language.
	 *
	 * @var RareStringData|null
	 */
	public $contentLanguage;

	/**
	 * Only set for documents, contains the document's character set encoding.
	 *
	 * @var RareStringData|null
	 */
	public $documentEncoding;

	/**
	 * `DocumentType` node's publicId.
	 *
	 * @var RareStringData|null
	 */
	public $publicId;

	/**
	 * `DocumentType` node's systemId.
	 *
	 * @var RareStringData|null
	 */
	public $systemId;

	/**
	 * Frame ID for frame owner elements and also for the document node.
	 *
	 * @var RareStringData|null
	 */
	public $frameId;

	/**
	 * The index of a frame owner element's content document in the `domNodes` array returned by `captureSnapshot`, if any.
	 *
	 * @var RareIntegerData|null
	 */
	public $contentDocumentIndex;

	/**
	 * Index of the imported document's node of a link element in the `domNodes` array returned by `captureSnapshot`, if any.
	 *
	 * @var RareIntegerData|null
	 */
	public $importedDocumentIndex;

	/**
	 * Index of the content node of a template element in the `domNodes` array returned by `captureSnapshot`.
	 *
	 * @var RareIntegerData|null
	 */
	public $templateContentIndex;

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
		if (isset($data->layoutNodeIndex)) {
			$instance->layoutNodeIndex = [];
			foreach ($data->layoutNodeIndex as $item) {
				$instance->layoutNodeIndex[] = (int)$item;
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
		if (isset($data->documentURL)) {
			$instance->documentURL = RareStringData::fromJson($data->documentURL);
		}
		if (isset($data->baseURL)) {
			$instance->baseURL = RareStringData::fromJson($data->baseURL);
		}
		if (isset($data->contentLanguage)) {
			$instance->contentLanguage = RareStringData::fromJson($data->contentLanguage);
		}
		if (isset($data->documentEncoding)) {
			$instance->documentEncoding = RareStringData::fromJson($data->documentEncoding);
		}
		if (isset($data->publicId)) {
			$instance->publicId = RareStringData::fromJson($data->publicId);
		}
		if (isset($data->systemId)) {
			$instance->systemId = RareStringData::fromJson($data->systemId);
		}
		if (isset($data->frameId)) {
			$instance->frameId = RareStringData::fromJson($data->frameId);
		}
		if (isset($data->contentDocumentIndex)) {
			$instance->contentDocumentIndex = RareIntegerData::fromJson($data->contentDocumentIndex);
		}
		if (isset($data->importedDocumentIndex)) {
			$instance->importedDocumentIndex = RareIntegerData::fromJson($data->importedDocumentIndex);
		}
		if (isset($data->templateContentIndex)) {
			$instance->templateContentIndex = RareIntegerData::fromJson($data->templateContentIndex);
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
		if ($this->layoutNodeIndex !== null) {
			$data->layoutNodeIndex = [];
			foreach ($this->layoutNodeIndex as $item) {
				$data->layoutNodeIndex[] = $item;
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
		if ($this->documentURL !== null) {
			$data->documentURL = $this->documentURL->jsonSerialize();
		}
		if ($this->baseURL !== null) {
			$data->baseURL = $this->baseURL->jsonSerialize();
		}
		if ($this->contentLanguage !== null) {
			$data->contentLanguage = $this->contentLanguage->jsonSerialize();
		}
		if ($this->documentEncoding !== null) {
			$data->documentEncoding = $this->documentEncoding->jsonSerialize();
		}
		if ($this->publicId !== null) {
			$data->publicId = $this->publicId->jsonSerialize();
		}
		if ($this->systemId !== null) {
			$data->systemId = $this->systemId->jsonSerialize();
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId->jsonSerialize();
		}
		if ($this->contentDocumentIndex !== null) {
			$data->contentDocumentIndex = $this->contentDocumentIndex->jsonSerialize();
		}
		if ($this->importedDocumentIndex !== null) {
			$data->importedDocumentIndex = $this->importedDocumentIndex->jsonSerialize();
		}
		if ($this->templateContentIndex !== null) {
			$data->templateContentIndex = $this->templateContentIndex->jsonSerialize();
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
