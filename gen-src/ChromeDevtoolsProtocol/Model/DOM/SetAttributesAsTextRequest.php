<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.setAttributesAsText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttributesAsTextRequest implements \JsonSerializable
{
	/**
	 * Id of the element to set attributes for.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Text with a number of attributes. Will parse this text using HTML parser.
	 *
	 * @var string
	 */
	public $text;

	/**
	 * Attribute name to replace with new attributes derived from text in case text parsed successfully.
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
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAttributesAsTextRequestBuilder
	 */
	public static function builder(): SetAttributesAsTextRequestBuilder
	{
		return new SetAttributesAsTextRequestBuilder();
	}
}
