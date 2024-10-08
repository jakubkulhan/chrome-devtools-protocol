<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue warns about sites in the redirect chain of a finished navigation that may be flagged as trackers and have their state cleared if they don't receive a user interaction. Note that in this context 'site' means eTLD+1. For example, if the URL `https://example.test:80/bounce` was in the redirect chain, the site reported would be `example.test`.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BounceTrackingIssueDetails implements \JsonSerializable
{
	/** @var string[] */
	public $trackingSites;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->trackingSites)) {
			$instance->trackingSites = [];
			foreach ($data->trackingSites as $item) {
				$instance->trackingSites[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->trackingSites !== null) {
			$data->trackingSites = [];
			foreach ($this->trackingSites as $item) {
				$data->trackingSites[] = $item;
			}
		}
		return $data;
	}
}
