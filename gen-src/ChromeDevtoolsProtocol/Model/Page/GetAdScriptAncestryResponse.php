<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getAdScriptAncestry command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAdScriptAncestryResponse implements \JsonSerializable
{
	/**
	 * The ancestry chain of ad script identifiers leading to this frame's creation, along with the root script's filterlist rule. The ancestry chain is ordered from the most immediate script (in the frame creation stack) to more distant ancestors (that created the immediately preceding script). Only sent if frame is labelled as an ad and ids are available.
	 *
	 * @var AdScriptAncestry|null
	 */
	public $adScriptAncestry;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->adScriptAncestry)) {
			$instance->adScriptAncestry = AdScriptAncestry::fromJson($data->adScriptAncestry);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->adScriptAncestry !== null) {
			$data->adScriptAncestry = $this->adScriptAncestry->jsonSerialize();
		}
		return $data;
	}
}
