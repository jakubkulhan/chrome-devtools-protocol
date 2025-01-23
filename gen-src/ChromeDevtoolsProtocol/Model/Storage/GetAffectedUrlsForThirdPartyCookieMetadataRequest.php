<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.getAffectedUrlsForThirdPartyCookieMetadata command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAffectedUrlsForThirdPartyCookieMetadataRequest implements \JsonSerializable
{
	/**
	 * The URL of the page currently being visited.
	 *
	 * @var string
	 */
	public $firstPartyUrl;

	/**
	 * The list of embedded resource URLs from the page.
	 *
	 * @var string[]
	 */
	public $thirdPartyUrls;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->firstPartyUrl)) {
			$instance->firstPartyUrl = (string)$data->firstPartyUrl;
		}
		if (isset($data->thirdPartyUrls)) {
			$instance->thirdPartyUrls = [];
			foreach ($data->thirdPartyUrls as $item) {
				$instance->thirdPartyUrls[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->firstPartyUrl !== null) {
			$data->firstPartyUrl = $this->firstPartyUrl;
		}
		if ($this->thirdPartyUrls !== null) {
			$data->thirdPartyUrls = [];
			foreach ($this->thirdPartyUrls as $item) {
				$data->thirdPartyUrls[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetAffectedUrlsForThirdPartyCookieMetadataRequestBuilder
	 */
	public static function builder(): GetAffectedUrlsForThirdPartyCookieMetadataRequestBuilder
	{
		return new GetAffectedUrlsForThirdPartyCookieMetadataRequestBuilder();
	}
}
