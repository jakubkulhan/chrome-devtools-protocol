<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired once when parsing the .wbn file has succeeded. The event contains the information about the web bundle contents.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SubresourceWebBundleMetadataReceivedEvent implements \JsonSerializable
{
	/**
	 * Request identifier. Used to match this information to another event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * A list of URLs of resources in the subresource Web Bundle.
	 *
	 * @var string[]
	 */
	public $urls;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->urls)) {
			$instance->urls = [];
			foreach ($data->urls as $item) {
				$instance->urls[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->urls !== null) {
			$data->urls = [];
			foreach ($this->urls as $item) {
				$data->urls[] = $item;
			}
		}
		return $data;
	}
}
