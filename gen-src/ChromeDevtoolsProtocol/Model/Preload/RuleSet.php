<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Corresponds to SpeculationRuleSet
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RuleSet implements \JsonSerializable
{
	/** @var string */
	public $id;

	/**
	 * Identifies a document which the rule set is associated with.
	 *
	 * @var string
	 */
	public $loaderId;

	/**
	 * Source text of JSON representing the rule set. If it comes from <script> tag, it is the textContent of the node. Note that it is a JSON for valid case. See also: - https://wicg.github.io/nav-speculation/speculation-rules.html - https://github.com/WICG/nav-speculation/blob/main/triggers.md
	 *
	 * @var string
	 */
	public $sourceText;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		if (isset($data->sourceText)) {
			$instance->sourceText = (string)$data->sourceText;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		if ($this->sourceText !== null) {
			$data->sourceText = $this->sourceText;
		}
		return $data;
	}
}
