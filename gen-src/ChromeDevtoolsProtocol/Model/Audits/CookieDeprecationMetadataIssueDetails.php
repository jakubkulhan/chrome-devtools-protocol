<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue warns about third-party sites that are accessing cookies on the current page, and have been permitted due to having a global metadata grant. Note that in this context 'site' means eTLD+1. For example, if the URL `https://example.test:80/web_page` was accessing cookies, the site reported would be `example.test`.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieDeprecationMetadataIssueDetails implements \JsonSerializable
{
	/** @var string[] */
	public $allowedSites;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->allowedSites)) {
			$instance->allowedSites = [];
			foreach ($data->allowedSites as $item) {
				$instance->allowedSites[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->allowedSites !== null) {
			$data->allowedSites = [];
			foreach ($this->allowedSites as $item) {
				$data->allowedSites[] = $item;
			}
		}
		return $data;
	}
}
