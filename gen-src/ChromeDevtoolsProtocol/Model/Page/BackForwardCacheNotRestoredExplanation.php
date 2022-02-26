<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.BackForwardCacheNotRestoredExplanation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BackForwardCacheNotRestoredExplanation implements \JsonSerializable
{
	/**
	 * Type of the reason
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Not restored reason
	 *
	 * @var string
	 */
	public $reason;

	/**
	 * Context associated with the reason. The meaning of this context is dependent on the reason: - EmbedderExtensionSentMessageToCachedFrame: the extension ID.
	 *
	 * @var string|null
	 */
	public $context;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		if (isset($data->context)) {
			$instance->context = (string)$data->context;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		if ($this->context !== null) {
			$data->context = $this->context;
		}
		return $data;
	}
}
