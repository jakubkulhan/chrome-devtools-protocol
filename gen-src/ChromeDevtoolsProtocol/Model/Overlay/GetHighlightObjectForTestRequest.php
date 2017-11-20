<?php
namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.getHighlightObjectForTest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHighlightObjectForTestRequest implements \JsonSerializable
{
	/**
	 * Id of the node to get highlight object for.
	 *
	 * @var int
	 */
	public $nodeId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetHighlightObjectForTestRequestBuilder
	 */
	public static function builder(): GetHighlightObjectForTestRequestBuilder
	{
		return new GetHighlightObjectForTestRequestBuilder();
	}
}
