<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * A descriptor of operation to mutate style declaration text.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StyleDeclarationEdit implements \JsonSerializable
{
	/**
	 * The css style sheet identifier.
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * The range of the style text in the enclosing stylesheet.
	 *
	 * @var SourceRange
	 */
	public $range;

	/**
	 * New style text.
	 *
	 * @var string
	 */
	public $text;


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
		if (isset($data->range)) {
			$instance->range = SourceRange::fromJson($data->range);
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->range !== null) {
			$data->range = $this->range->jsonSerialize();
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		return $data;
	}
}
