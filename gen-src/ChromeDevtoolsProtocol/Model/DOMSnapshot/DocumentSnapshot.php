<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Document snapshot.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DocumentSnapshot implements \JsonSerializable
{
	/**
	 * Document URL that `Document` or `FrameOwner` node points to.
	 *
	 * @var int
	 */
	public $documentURL;

	/**
	 * Document title.
	 *
	 * @var int
	 */
	public $title;

	/**
	 * Base URL that `Document` or `FrameOwner` node uses for URL completion.
	 *
	 * @var int
	 */
	public $baseURL;

	/**
	 * Contains the document's content language.
	 *
	 * @var int
	 */
	public $contentLanguage;

	/**
	 * Contains the document's character set encoding.
	 *
	 * @var int
	 */
	public $encodingName;

	/**
	 * `DocumentType` node's publicId.
	 *
	 * @var int
	 */
	public $publicId;

	/**
	 * `DocumentType` node's systemId.
	 *
	 * @var int
	 */
	public $systemId;

	/**
	 * Frame ID for frame owner elements and also for the document node.
	 *
	 * @var int
	 */
	public $frameId;

	/**
	 * A table with dom nodes.
	 *
	 * @var NodeTreeSnapshot
	 */
	public $nodes;

	/**
	 * The nodes in the layout tree.
	 *
	 * @var LayoutTreeSnapshot
	 */
	public $layout;

	/**
	 * The post-layout inline text nodes.
	 *
	 * @var TextBoxSnapshot
	 */
	public $textBoxes;

	/**
	 * Horizontal scroll offset.
	 *
	 * @var int|float|null
	 */
	public $scrollOffsetX;

	/**
	 * Vertical scroll offset.
	 *
	 * @var int|float|null
	 */
	public $scrollOffsetY;

	/**
	 * Document content width.
	 *
	 * @var int|float|null
	 */
	public $contentWidth;

	/**
	 * Document content height.
	 *
	 * @var int|float|null
	 */
	public $contentHeight;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->documentURL)) {
			$instance->documentURL = (int)$data->documentURL;
		}
		if (isset($data->title)) {
			$instance->title = (int)$data->title;
		}
		if (isset($data->baseURL)) {
			$instance->baseURL = (int)$data->baseURL;
		}
		if (isset($data->contentLanguage)) {
			$instance->contentLanguage = (int)$data->contentLanguage;
		}
		if (isset($data->encodingName)) {
			$instance->encodingName = (int)$data->encodingName;
		}
		if (isset($data->publicId)) {
			$instance->publicId = (int)$data->publicId;
		}
		if (isset($data->systemId)) {
			$instance->systemId = (int)$data->systemId;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (int)$data->frameId;
		}
		if (isset($data->nodes)) {
			$instance->nodes = NodeTreeSnapshot::fromJson($data->nodes);
		}
		if (isset($data->layout)) {
			$instance->layout = LayoutTreeSnapshot::fromJson($data->layout);
		}
		if (isset($data->textBoxes)) {
			$instance->textBoxes = TextBoxSnapshot::fromJson($data->textBoxes);
		}
		if (isset($data->scrollOffsetX)) {
			$instance->scrollOffsetX = $data->scrollOffsetX;
		}
		if (isset($data->scrollOffsetY)) {
			$instance->scrollOffsetY = $data->scrollOffsetY;
		}
		if (isset($data->contentWidth)) {
			$instance->contentWidth = $data->contentWidth;
		}
		if (isset($data->contentHeight)) {
			$instance->contentHeight = $data->contentHeight;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->documentURL !== null) {
			$data->documentURL = $this->documentURL;
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		if ($this->baseURL !== null) {
			$data->baseURL = $this->baseURL;
		}
		if ($this->contentLanguage !== null) {
			$data->contentLanguage = $this->contentLanguage;
		}
		if ($this->encodingName !== null) {
			$data->encodingName = $this->encodingName;
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
		if ($this->nodes !== null) {
			$data->nodes = $this->nodes->jsonSerialize();
		}
		if ($this->layout !== null) {
			$data->layout = $this->layout->jsonSerialize();
		}
		if ($this->textBoxes !== null) {
			$data->textBoxes = $this->textBoxes->jsonSerialize();
		}
		if ($this->scrollOffsetX !== null) {
			$data->scrollOffsetX = $this->scrollOffsetX;
		}
		if ($this->scrollOffsetY !== null) {
			$data->scrollOffsetY = $this->scrollOffsetY;
		}
		if ($this->contentWidth !== null) {
			$data->contentWidth = $this->contentWidth;
		}
		if ($this->contentHeight !== null) {
			$data->contentHeight = $this->contentHeight;
		}
		return $data;
	}
}
