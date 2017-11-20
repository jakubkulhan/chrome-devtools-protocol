<?php
namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Request for DOMSnapshot.getSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSnapshotRequest implements \JsonSerializable
{
	/**
	 * Whitelist of computed styles to return.
	 *
	 * @var string[]
	 */
	public $computedStyleWhitelist;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->computedStyleWhitelist)) {
			$instance->computedStyleWhitelist = [];
			foreach ($data->computedStyleWhitelist as $item) {
				$instance->computedStyleWhitelist[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->computedStyleWhitelist !== null) {
			$data->computedStyleWhitelist = [];
			foreach ($this->computedStyleWhitelist as $item) {
				$data->computedStyleWhitelist[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetSnapshotRequestBuilder
	 */
	public static function builder(): GetSnapshotRequestBuilder
	{
		return new GetSnapshotRequestBuilder();
	}
}
