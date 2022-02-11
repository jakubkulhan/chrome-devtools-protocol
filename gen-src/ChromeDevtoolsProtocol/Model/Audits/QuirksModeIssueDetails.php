<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Details for issues about documents in Quirks Mode or Limited Quirks Mode that affects page layouting.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class QuirksModeIssueDetails implements \JsonSerializable
{
	/**
	 * If false, it means the document's mode is "quirks" instead of "limited-quirks".
	 *
	 * @var bool
	 */
	public $isLimitedQuirksMode;

	/** @var int */
	public $documentNodeId;

	/** @var string */
	public $url;

	/** @var string */
	public $frameId;

	/** @var string */
	public $loaderId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->isLimitedQuirksMode)) {
			$instance->isLimitedQuirksMode = (bool)$data->isLimitedQuirksMode;
		}
		if (isset($data->documentNodeId)) {
			$instance->documentNodeId = (int)$data->documentNodeId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->isLimitedQuirksMode !== null) {
			$data->isLimitedQuirksMode = $this->isLimitedQuirksMode;
		}
		if ($this->documentNodeId !== null) {
			$data->documentNodeId = $this->documentNodeId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		return $data;
	}
}
