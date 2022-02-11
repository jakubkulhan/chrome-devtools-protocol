<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS container query rule descriptor.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSContainerQuery implements \JsonSerializable
{
	/**
	 * Container query text.
	 *
	 * @var string
	 */
	public $text;

	/**
	 * The associated rule header range in the enclosing stylesheet (if available).
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
	 * Optional name for the container.
	 *
	 * @var string|null
	 */
	public $name;


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
		if (isset($data->range)) {
			$instance->range = SourceRange::fromJson($data->range);
		}
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->range !== null) {
			$data->range = $this->range->jsonSerialize();
		}
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		return $data;
	}
}
