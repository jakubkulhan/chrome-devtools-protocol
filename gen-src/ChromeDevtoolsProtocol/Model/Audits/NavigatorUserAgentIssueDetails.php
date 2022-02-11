<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.NavigatorUserAgentIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NavigatorUserAgentIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $url;

	/** @var SourceCodeLocation|null */
	public $location;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->location)) {
			$instance->location = SourceCodeLocation::fromJson($data->location);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->location !== null) {
			$data->location = $this->location->jsonSerialize();
		}
		return $data;
	}
}
