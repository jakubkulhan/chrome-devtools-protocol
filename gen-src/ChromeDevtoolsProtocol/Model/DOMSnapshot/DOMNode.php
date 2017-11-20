<?php
namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * A Node in the DOM tree.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DOMNode implements \JsonSerializable
{
	/**
	 * <code>Node</code>'s nodeType.
	 *
	 * @var int
	 */
	public $nodeType;

	/**
	 * <code>Node</code>'s nodeName.
	 *
	 * @var string
	 */
	public $nodeName;

	/**
	 * <code>Node</code>'s nodeValue.
	 *
	 * @var string
	 */
	public $nodeValue;

	/**
	 * Only set for textarea elements, contains the text value.
	 *
	 * @var string|null
	 */
	public $textValue;

	/**
	 * Only set for input elements, contains the input's associated text value.
	 *
	 * @var string|null
	 */
	public $inputValue;

	/**
	 * Only set for radio and checkbox input elements, indicates if the element has been checked
	 *
	 * @var bool|null
	 */
	public $inputChecked;

	/**
	 * Only set for option elements, indicates if the element has been selected
	 *
	 * @var bool|null
	 */
	public $optionSelected;

	/**
	 * <code>Node</code>'s id, corresponds to DOM.Node.backendNodeId.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * The indexes of the node's child nodes in the <code>domNodes</code> array returned by <code>getSnapshot</code>, if any.
	 *
	 * @var int[]|null
	 */
	public $childNodeIndexes;

	/**
	 * Attributes of an <code>Element</code> node.
	 *
	 * @var NameValue[]|null
	 */
	public $attributes;

	/**
	 * Indexes of pseudo elements associated with this node in the <code>domNodes</code> array returned by <code>getSnapshot</code>, if any.
	 *
	 * @var int[]|null
	 */
	public $pseudoElementIndexes;

	/**
	 * The index of the node's related layout tree node in the <code>layoutTreeNodes</code> array returned by <code>getSnapshot</code>, if any.
	 *
	 * @var int|null
	 */
	public $layoutNodeIndex;

	/**
	 * Document URL that <code>Document</code> or <code>FrameOwner</code> node points to.
	 *
	 * @var string|null
	 */
	public $documentURL;

	/**
	 * Base URL that <code>Document</code> or <code>FrameOwner</code> node uses for URL completion.
	 *
	 * @var string|null
	 */
	public $baseURL;

	/**
	 * Only set for documents, contains the document's content language.
	 *
	 * @var string|null
	 */
	public $contentLanguage;

	/**
	 * Only set for documents, contains the document's character set encoding.
	 *
	 * @var string|null
	 */
	public $documentEncoding;

	/**
	 * <code>DocumentType</code> node's publicId.
	 *
	 * @var string|null
	 */
	public $publicId;

	/**
	 * <code>DocumentType</code> node's systemId.
	 *
	 * @var string|null
	 */
	public $systemId;

	/**
	 * Frame ID for frame owner elements and also for the document node.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * The index of a frame owner element's content document in the <code>domNodes</code> array returned by <code>getSnapshot</code>, if any.
	 *
	 * @var int|null
	 */
	public $contentDocumentIndex;

	/**
	 * Index of the imported document's node of a link element in the <code>domNodes</code> array returned by <code>getSnapshot</code>, if any.
	 *
	 * @var int|null
	 */
	public $importedDocumentIndex;

	/**
	 * Index of the content node of a template element in the <code>domNodes</code> array returned by <code>getSnapshot</code>.
	 *
	 * @var int|null
	 */
	public $templateContentIndex;

	/**
	 * Type of a pseudo element node.
	 *
	 * @var string
	 */
	public $pseudoType;

	/**
	 * Whether this DOM node responds to mouse clicks. This includes nodes that have had click event listeners attached via JavaScript as well as anchor tags that naturally navigate when clicked.
	 *
	 * @var bool|null
	 */
	public $isClickable;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeType)) {
			$instance->nodeType = (int)$data->nodeType;
		}
		if (isset($data->nodeName)) {
			$instance->nodeName = (string)$data->nodeName;
		}
		if (isset($data->nodeValue)) {
			$instance->nodeValue = (string)$data->nodeValue;
		}
		if (isset($data->textValue)) {
			$instance->textValue = (string)$data->textValue;
		}
		if (isset($data->inputValue)) {
			$instance->inputValue = (string)$data->inputValue;
		}
		if (isset($data->inputChecked)) {
			$instance->inputChecked = (bool)$data->inputChecked;
		}
		if (isset($data->optionSelected)) {
			$instance->optionSelected = (bool)$data->optionSelected;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->childNodeIndexes)) {
			$instance->childNodeIndexes = [];
			foreach ($data->childNodeIndexes as $item) {
				$instance->childNodeIndexes[] = (int)$item;
			}
		}
		if (isset($data->attributes)) {
			$instance->attributes = [];
			foreach ($data->attributes as $item) {
				$instance->attributes[] = NameValue::fromJson($item);
			}
		}
		if (isset($data->pseudoElementIndexes)) {
			$instance->pseudoElementIndexes = [];
			foreach ($data->pseudoElementIndexes as $item) {
				$instance->pseudoElementIndexes[] = (int)$item;
			}
		}
		if (isset($data->layoutNodeIndex)) {
			$instance->layoutNodeIndex = (int)$data->layoutNodeIndex;
		}
		if (isset($data->documentURL)) {
			$instance->documentURL = (string)$data->documentURL;
		}
		if (isset($data->baseURL)) {
			$instance->baseURL = (string)$data->baseURL;
		}
		if (isset($data->contentLanguage)) {
			$instance->contentLanguage = (string)$data->contentLanguage;
		}
		if (isset($data->documentEncoding)) {
			$instance->documentEncoding = (string)$data->documentEncoding;
		}
		if (isset($data->publicId)) {
			$instance->publicId = (string)$data->publicId;
		}
		if (isset($data->systemId)) {
			$instance->systemId = (string)$data->systemId;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->contentDocumentIndex)) {
			$instance->contentDocumentIndex = (int)$data->contentDocumentIndex;
		}
		if (isset($data->importedDocumentIndex)) {
			$instance->importedDocumentIndex = (int)$data->importedDocumentIndex;
		}
		if (isset($data->templateContentIndex)) {
			$instance->templateContentIndex = (int)$data->templateContentIndex;
		}
		if (isset($data->pseudoType)) {
			$instance->pseudoType = (string)$data->pseudoType;
		}
		if (isset($data->isClickable)) {
			$instance->isClickable = (bool)$data->isClickable;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeType !== null) {
			$data->nodeType = $this->nodeType;
		}
		if ($this->nodeName !== null) {
			$data->nodeName = $this->nodeName;
		}
		if ($this->nodeValue !== null) {
			$data->nodeValue = $this->nodeValue;
		}
		if ($this->textValue !== null) {
			$data->textValue = $this->textValue;
		}
		if ($this->inputValue !== null) {
			$data->inputValue = $this->inputValue;
		}
		if ($this->inputChecked !== null) {
			$data->inputChecked = $this->inputChecked;
		}
		if ($this->optionSelected !== null) {
			$data->optionSelected = $this->optionSelected;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->childNodeIndexes !== null) {
			$data->childNodeIndexes = [];
			foreach ($this->childNodeIndexes as $item) {
				$data->childNodeIndexes[] = $item;
			}
		}
		if ($this->attributes !== null) {
			$data->attributes = [];
			foreach ($this->attributes as $item) {
				$data->attributes[] = $item->jsonSerialize();
			}
		}
		if ($this->pseudoElementIndexes !== null) {
			$data->pseudoElementIndexes = [];
			foreach ($this->pseudoElementIndexes as $item) {
				$data->pseudoElementIndexes[] = $item;
			}
		}
		if ($this->layoutNodeIndex !== null) {
			$data->layoutNodeIndex = $this->layoutNodeIndex;
		}
		if ($this->documentURL !== null) {
			$data->documentURL = $this->documentURL;
		}
		if ($this->baseURL !== null) {
			$data->baseURL = $this->baseURL;
		}
		if ($this->contentLanguage !== null) {
			$data->contentLanguage = $this->contentLanguage;
		}
		if ($this->documentEncoding !== null) {
			$data->documentEncoding = $this->documentEncoding;
		}
		if ($this->publicId !== null) {
			$data->publicId = $this->publicId;
		}
		if ($this->systemId !== null) {
			$data->systemId = $this->systemId;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->contentDocumentIndex !== null) {
			$data->contentDocumentIndex = $this->contentDocumentIndex;
		}
		if ($this->importedDocumentIndex !== null) {
			$data->importedDocumentIndex = $this->importedDocumentIndex;
		}
		if ($this->templateContentIndex !== null) {
			$data->templateContentIndex = $this->templateContentIndex;
		}
		if ($this->pseudoType !== null) {
			$data->pseudoType = $this->pseudoType;
		}
		if ($this->isClickable !== null) {
			$data->isClickable = $this->isClickable;
		}
		return $data;
	}
}
