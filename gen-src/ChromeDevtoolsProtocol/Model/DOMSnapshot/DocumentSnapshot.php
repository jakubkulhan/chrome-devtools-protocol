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


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->documentURL)) {
			$instance->documentURL = (int)$data->documentURL;
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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->documentURL !== null) {
			$data->documentURL = $this->documentURL;
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
		return $data;
	}
}
