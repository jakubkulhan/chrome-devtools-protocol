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
	 * A speculation rule set is either added through an inline <script> tag or through an external resource via the 'Speculation-Rules' HTTP header. For the first case, we include the BackendNodeId of the relevant <script> tag. For the second case, we include the external URL where the rule set was loaded from, and also RequestId if Network domain is enabled. See also: - https://wicg.github.io/nav-speculation/speculation-rules.html#speculation-rules-script - https://wicg.github.io/nav-speculation/speculation-rules.html#speculation-rules-header
	 *
	 * @var int
	 */
	public $backendNodeId;

	/** @var string|null */
	public $url;

	/** @var string */
	public $requestId;

	/**
	 * Error information `errorMessage` is null iff `errorType` is null.
	 *
	 * @var string
	 */
	public $errorType;

	/**
	 * TODO(https://crbug.com/1425354): Replace this property with structured error.
	 *
	 * @var string|null
	 */
	public $errorMessage;


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
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->errorType)) {
			$instance->errorType = (string)$data->errorType;
		}
		if (isset($data->errorMessage)) {
			$instance->errorMessage = (string)$data->errorMessage;
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
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->errorType !== null) {
			$data->errorType = $this->errorType;
		}
		if ($this->errorMessage !== null) {
			$data->errorMessage = $this->errorMessage;
		}
		return $data;
	}
}
