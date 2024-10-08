<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS media rule descriptor.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSMedia implements \JsonSerializable
{
	/**
	 * Media query text.
	 *
	 * @var string
	 */
	public $text;

	/**
	 * Source of the media query: "mediaRule" if specified by a @media rule, "importRule" if specified by an @import rule, "linkedSheet" if specified by a "media" attribute in a linked stylesheet's LINK tag, "inlineSheet" if specified by a "media" attribute in an inline stylesheet's STYLE tag.
	 *
	 * @var string
	 */
	public $source;

	/**
	 * URL of the document containing the media query description.
	 *
	 * @var string|null
	 */
	public $sourceURL;

	/**
	 * The associated rule (@media or @import) header range in the enclosing stylesheet (if available).
	 *
	 * @var SourceRange|null
	 */
	public $range;

	/**
	 * Identifier of the stylesheet containing this object (if exists).
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * Array of media queries.
	 *
	 * @var MediaQuery[]|null
	 */
	public $mediaList;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		if (isset($data->sourceURL)) {
			$instance->sourceURL = (string)$data->sourceURL;
		}
		if (isset($data->range)) {
			$instance->range = SourceRange::fromJson($data->range);
		}
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		if (isset($data->mediaList)) {
			$instance->mediaList = [];
			foreach ($data->mediaList as $item) {
				$instance->mediaList[] = MediaQuery::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->source !== null) {
			$data->source = $this->source;
		}
		if ($this->sourceURL !== null) {
			$data->sourceURL = $this->sourceURL;
		}
		if ($this->range !== null) {
			$data->range = $this->range->jsonSerialize();
		}
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->mediaList !== null) {
			$data->mediaList = [];
			foreach ($this->mediaList as $item) {
				$data->mediaList[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
