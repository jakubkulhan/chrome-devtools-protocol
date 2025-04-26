<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getAdScriptAncestryIds command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAdScriptAncestryIdsResponse implements \JsonSerializable
{
	/**
	 * The ancestry chain of ad script identifiers leading to this frame's creation, ordered from the most immediate script (in the frame creation stack) to more distant ancestors (that created the immediately preceding script). Only sent if frame is labelled as an ad and ids are available.
	 *
	 * @var AdScriptId[]
	 */
	public $adScriptAncestryIds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->adScriptAncestryIds)) {
			$instance->adScriptAncestryIds = [];
			foreach ($data->adScriptAncestryIds as $item) {
				$instance->adScriptAncestryIds[] = AdScriptId::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->adScriptAncestryIds !== null) {
			$data->adScriptAncestryIds = [];
			foreach ($this->adScriptAncestryIds as $item) {
				$data->adScriptAncestryIds[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
