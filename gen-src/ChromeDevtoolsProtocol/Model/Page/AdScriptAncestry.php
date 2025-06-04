<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Encapsulates the script ancestry and the root script filterlist rule that caused the frame to be labelled as an ad. Only created when `ancestryChain` is not empty.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdScriptAncestry implements \JsonSerializable
{
	/**
	 * A chain of `AdScriptId`s representing the ancestry of an ad script that led to the creation of a frame. The chain is ordered from the script itself (lower level) up to its root ancestor that was flagged by filterlist.
	 *
	 * @var AdScriptId[]
	 */
	public $ancestryChain;

	/**
	 * The filterlist rule that caused the root (last) script in `ancestryChain` to be ad-tagged. Only populated if the rule is available.
	 *
	 * @var string|null
	 */
	public $rootScriptFilterlistRule;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ancestryChain)) {
			$instance->ancestryChain = [];
			foreach ($data->ancestryChain as $item) {
				$instance->ancestryChain[] = AdScriptId::fromJson($item);
			}
		}
		if (isset($data->rootScriptFilterlistRule)) {
			$instance->rootScriptFilterlistRule = (string)$data->rootScriptFilterlistRule;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ancestryChain !== null) {
			$data->ancestryChain = [];
			foreach ($this->ancestryChain as $item) {
				$data->ancestryChain[] = $item->jsonSerialize();
			}
		}
		if ($this->rootScriptFilterlistRule !== null) {
			$data->rootScriptFilterlistRule = $this->rootScriptFilterlistRule;
		}
		return $data;
	}
}
