<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Represents the provenance of an ad resource or element. Only one of `filterlistRule` or `adScriptAncestry` can be set. If `filterlistRule` is provided, the resource URL directly matches a filter list rule. If `adScriptAncestry` is provided, an ad script initiated the resource fetch or appended the element to the DOM. If neither is provided, the entity is known to be an ad, but provenance tracking information is unavailable.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdProvenance implements \JsonSerializable
{
	/**
	 * The filterlist rule that matched, if any.
	 *
	 * @var string|null
	 */
	public $filterlistRule;

	/**
	 * The script ancestry that created the ad, if any.
	 *
	 * @var AdAncestry|null
	 */
	public $adScriptAncestry;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->filterlistRule)) {
			$instance->filterlistRule = (string)$data->filterlistRule;
		}
		if (isset($data->adScriptAncestry)) {
			$instance->adScriptAncestry = AdAncestry::fromJson($data->adScriptAncestry);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->filterlistRule !== null) {
			$data->filterlistRule = $this->filterlistRule;
		}
		if ($this->adScriptAncestry !== null) {
			$data->adScriptAncestry = $this->adScriptAncestry->jsonSerialize();
		}
		return $data;
	}
}
