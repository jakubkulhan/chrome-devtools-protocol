<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Encapsulates the script ancestry and the root script filter list rule that caused the resource or element to be labeled as an ad.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdAncestry implements \JsonSerializable
{
	/**
	 * A chain of `AdScriptIdentifier`s representing the ancestry of an ad script that led to the creation of a resource or element. The chain is ordered from the script itself (lowest level) up to its root ancestor that was flagged by a filter list.
	 *
	 * @var AdScriptIdentifier[]
	 */
	public $ancestryChain;

	/**
	 * The filter list rule that caused the root (last) script in `ancestryChain` to be tagged as an ad.
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
				$instance->ancestryChain[] = AdScriptIdentifier::fromJson($item);
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
