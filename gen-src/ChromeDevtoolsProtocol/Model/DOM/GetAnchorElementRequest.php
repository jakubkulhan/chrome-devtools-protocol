<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getAnchorElement command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAnchorElementRequest implements \JsonSerializable
{
	/**
	 * Id of the positioned element from which to find the anchor.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * An optional anchor specifier, as defined in https://www.w3.org/TR/css-anchor-position-1/#anchor-specifier. If not provided, it will return the implicit anchor element for the given positioned element.
	 *
	 * @var string|null
	 */
	public $anchorSpecifier;


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
		if (isset($data->anchorSpecifier)) {
			$instance->anchorSpecifier = (string)$data->anchorSpecifier;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->anchorSpecifier !== null) {
			$data->anchorSpecifier = $this->anchorSpecifier;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetAnchorElementRequestBuilder
	 */
	public static function builder(): GetAnchorElementRequestBuilder
	{
		return new GetAnchorElementRequestBuilder();
	}
}
