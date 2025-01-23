<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.getAffectedUrlsForThirdPartyCookieMetadata command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAffectedUrlsForThirdPartyCookieMetadataResponse implements \JsonSerializable
{
	/**
	 * Array of matching URLs. If there is a primary pattern match for the first- party URL, only the first-party URL is returned in the array.
	 *
	 * @var string[]
	 */
	public $matchedUrls;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->matchedUrls)) {
			$instance->matchedUrls = [];
			foreach ($data->matchedUrls as $item) {
				$instance->matchedUrls[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->matchedUrls !== null) {
			$data->matchedUrls = [];
			foreach ($this->matchedUrls as $item) {
				$data->matchedUrls[] = $item;
			}
		}
		return $data;
	}
}
