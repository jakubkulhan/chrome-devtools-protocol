<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS stylesheet metainformation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSStyleSheetHeader implements \JsonSerializable
{
	/**
	 * The stylesheet identifier.
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * Owner frame identifier.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Stylesheet resource URL. Empty if this is a constructed stylesheet created using new CSSStyleSheet() (but non-empty if this is a constructed sylesheet imported as a CSS module script).
	 *
	 * @var string
	 */
	public $sourceURL;

	/**
	 * URL of source map associated with the stylesheet (if any).
	 *
	 * @var string|null
	 */
	public $sourceMapURL;

	/**
	 * Stylesheet origin.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * Stylesheet title.
	 *
	 * @var string
	 */
	public $title;

	/**
	 * The backend id for the owner node of the stylesheet.
	 *
	 * @var int
	 */
	public $ownerNode;

	/**
	 * Denotes whether the stylesheet is disabled.
	 *
	 * @var bool
	 */
	public $disabled;

	/**
	 * Whether the sourceURL field value comes from the sourceURL comment.
	 *
	 * @var bool|null
	 */
	public $hasSourceURL;

	/**
	 * Whether this stylesheet is created for STYLE tag by parser. This flag is not set for document.written STYLE tags.
	 *
	 * @var bool
	 */
	public $isInline;

	/**
	 * Whether this stylesheet is mutable. Inline stylesheets become mutable after they have been modified via CSSOM API. <link> element's stylesheets become mutable only if DevTools modifies them. Constructed stylesheets (new CSSStyleSheet()) are mutable immediately after creation.
	 *
	 * @var bool
	 */
	public $isMutable;

	/**
	 * True if this stylesheet is created through new CSSStyleSheet() or imported as a CSS module script.
	 *
	 * @var bool
	 */
	public $isConstructed;

	/**
	 * Line offset of the stylesheet within the resource (zero based).
	 *
	 * @var int|float
	 */
	public $startLine;

	/**
	 * Column offset of the stylesheet within the resource (zero based).
	 *
	 * @var int|float
	 */
	public $startColumn;

	/**
	 * Size of the content (in characters).
	 *
	 * @var int|float
	 */
	public $length;

	/**
	 * Line offset of the end of the stylesheet within the resource (zero based).
	 *
	 * @var int|float
	 */
	public $endLine;

	/**
	 * Column offset of the end of the stylesheet within the resource (zero based).
	 *
	 * @var int|float
	 */
	public $endColumn;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->sourceURL)) {
			$instance->sourceURL = (string)$data->sourceURL;
		}
		if (isset($data->sourceMapURL)) {
			$instance->sourceMapURL = (string)$data->sourceMapURL;
		}
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->title)) {
			$instance->title = (string)$data->title;
		}
		if (isset($data->ownerNode)) {
			$instance->ownerNode = (int)$data->ownerNode;
		}
		if (isset($data->disabled)) {
			$instance->disabled = (bool)$data->disabled;
		}
		if (isset($data->hasSourceURL)) {
			$instance->hasSourceURL = (bool)$data->hasSourceURL;
		}
		if (isset($data->isInline)) {
			$instance->isInline = (bool)$data->isInline;
		}
		if (isset($data->isMutable)) {
			$instance->isMutable = (bool)$data->isMutable;
		}
		if (isset($data->isConstructed)) {
			$instance->isConstructed = (bool)$data->isConstructed;
		}
		if (isset($data->startLine)) {
			$instance->startLine = $data->startLine;
		}
		if (isset($data->startColumn)) {
			$instance->startColumn = $data->startColumn;
		}
		if (isset($data->length)) {
			$instance->length = $data->length;
		}
		if (isset($data->endLine)) {
			$instance->endLine = $data->endLine;
		}
		if (isset($data->endColumn)) {
			$instance->endColumn = $data->endColumn;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->sourceURL !== null) {
			$data->sourceURL = $this->sourceURL;
		}
		if ($this->sourceMapURL !== null) {
			$data->sourceMapURL = $this->sourceMapURL;
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		if ($this->ownerNode !== null) {
			$data->ownerNode = $this->ownerNode;
		}
		if ($this->disabled !== null) {
			$data->disabled = $this->disabled;
		}
		if ($this->hasSourceURL !== null) {
			$data->hasSourceURL = $this->hasSourceURL;
		}
		if ($this->isInline !== null) {
			$data->isInline = $this->isInline;
		}
		if ($this->isMutable !== null) {
			$data->isMutable = $this->isMutable;
		}
		if ($this->isConstructed !== null) {
			$data->isConstructed = $this->isConstructed;
		}
		if ($this->startLine !== null) {
			$data->startLine = $this->startLine;
		}
		if ($this->startColumn !== null) {
			$data->startColumn = $this->startColumn;
		}
		if ($this->length !== null) {
			$data->length = $this->length;
		}
		if ($this->endLine !== null) {
			$data->endLine = $this->endLine;
		}
		if ($this->endColumn !== null) {
			$data->endColumn = $this->endColumn;
		}
		return $data;
	}
}
