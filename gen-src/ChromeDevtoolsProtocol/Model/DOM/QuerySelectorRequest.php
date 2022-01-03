<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.querySelector command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class QuerySelectorRequest implements \JsonSerializable
{
	/**
	 * Id of the node to query upon.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Selector string.
	 *
	 * @var string
	 */
	public $selector;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->selector)) {
			$instance->selector = (string)$data->selector;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->selector !== null) {
			$data->selector = $this->selector;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return QuerySelectorRequestBuilder
	 */
	public static function builder(): QuerySelectorRequestBuilder
	{
		return new QuerySelectorRequestBuilder();
	}
}
