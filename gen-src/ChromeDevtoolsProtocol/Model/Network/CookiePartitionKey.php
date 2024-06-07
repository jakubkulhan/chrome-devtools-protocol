<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * cookiePartitionKey object The representation of the components of the key that are created by the cookiePartitionKey class contained in net/cookies/cookie_partition_key.h.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookiePartitionKey implements \JsonSerializable
{
	/**
	 * The site of the top-level URL the browser was visiting at the start of the request to the endpoint that set the cookie.
	 *
	 * @var string
	 */
	public $topLevelSite;

	/**
	 * Indicates if the cookie has any ancestors that are cross-site to the topLevelSite.
	 *
	 * @var bool
	 */
	public $hasCrossSiteAncestor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->topLevelSite)) {
			$instance->topLevelSite = (string)$data->topLevelSite;
		}
		if (isset($data->hasCrossSiteAncestor)) {
			$instance->hasCrossSiteAncestor = (bool)$data->hasCrossSiteAncestor;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->topLevelSite !== null) {
			$data->topLevelSite = $this->topLevelSite;
		}
		if ($this->hasCrossSiteAncestor !== null) {
			$data->hasCrossSiteAncestor = $this->hasCrossSiteAncestor;
		}
		return $data;
	}
}
