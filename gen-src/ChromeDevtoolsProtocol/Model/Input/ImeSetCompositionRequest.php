<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.imeSetComposition command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ImeSetCompositionRequest implements \JsonSerializable
{
	/**
	 * The text to insert
	 *
	 * @var string
	 */
	public $text;

	/**
	 * selection start
	 *
	 * @var int
	 */
	public $selectionStart;

	/**
	 * selection end
	 *
	 * @var int
	 */
	public $selectionEnd;

	/**
	 * replacement start
	 *
	 * @var int|null
	 */
	public $replacementStart;

	/**
	 * replacement end
	 *
	 * @var int|null
	 */
	public $replacementEnd;


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
		if (isset($data->selectionStart)) {
			$instance->selectionStart = (int)$data->selectionStart;
		}
		if (isset($data->selectionEnd)) {
			$instance->selectionEnd = (int)$data->selectionEnd;
		}
		if (isset($data->replacementStart)) {
			$instance->replacementStart = (int)$data->replacementStart;
		}
		if (isset($data->replacementEnd)) {
			$instance->replacementEnd = (int)$data->replacementEnd;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->selectionStart !== null) {
			$data->selectionStart = $this->selectionStart;
		}
		if ($this->selectionEnd !== null) {
			$data->selectionEnd = $this->selectionEnd;
		}
		if ($this->replacementStart !== null) {
			$data->replacementStart = $this->replacementStart;
		}
		if ($this->replacementEnd !== null) {
			$data->replacementEnd = $this->replacementEnd;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ImeSetCompositionRequestBuilder
	 */
	public static function builder(): ImeSetCompositionRequestBuilder
	{
		return new ImeSetCompositionRequestBuilder();
	}
}
