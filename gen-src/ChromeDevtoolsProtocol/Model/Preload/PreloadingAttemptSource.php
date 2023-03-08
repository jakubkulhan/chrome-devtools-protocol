<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Lists sources for a preloading attempt, specifically the ids of rule sets that had a speculation rule that triggered the attempt, and the BackendNodeIds of <a href> or <area href> elements that triggered the attempt (in the case of attempts triggered by a document rule). It is possible for mulitple rule sets and links to trigger a single attempt.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PreloadingAttemptSource implements \JsonSerializable
{
	/** @var PreloadingAttemptKey */
	public $key;

	/** @var string[] */
	public $ruleSetIds;

	/** @var int[] */
	public $nodeIds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = PreloadingAttemptKey::fromJson($data->key);
		}
		if (isset($data->ruleSetIds)) {
			$instance->ruleSetIds = [];
		if (isset($data->ruleSetIds)) {
			$instance->ruleSetIds = [];
			foreach ($data->ruleSetIds as $item) {
				$instance->ruleSetIds[] = (string)$item;
			}
		}
		}
		if (isset($data->nodeIds)) {
			$instance->nodeIds = [];
		if (isset($data->nodeIds)) {
			$instance->nodeIds = [];
			foreach ($data->nodeIds as $item) {
				$instance->nodeIds[] = (int)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key->jsonSerialize();
		}
		if ($this->ruleSetIds !== null) {
			$data->ruleSetIds = [];
		if ($this->ruleSetIds !== null) {
			$data->ruleSetIds = [];
			foreach ($this->ruleSetIds as $item) {
				$data->ruleSetIds[] = $item;
			}
		}
		}
		if ($this->nodeIds !== null) {
			$data->nodeIds = [];
		if ($this->nodeIds !== null) {
			$data->nodeIds = [];
			foreach ($this->nodeIds as $item) {
				$data->nodeIds[] = $item;
			}
		}
		}
		return $data;
	}
}
