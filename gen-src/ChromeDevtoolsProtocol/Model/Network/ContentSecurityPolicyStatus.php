<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.ContentSecurityPolicyStatus.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContentSecurityPolicyStatus implements \JsonSerializable
{
	/** @var string */
	public $effectiveDirectives;

	/** @var bool */
	public $isEnforced;

	/** @var string */
	public $source;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->effectiveDirectives)) {
			$instance->effectiveDirectives = (string)$data->effectiveDirectives;
		}
		if (isset($data->isEnforced)) {
			$instance->isEnforced = (bool)$data->isEnforced;
		}
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->effectiveDirectives !== null) {
			$data->effectiveDirectives = $this->effectiveDirectives;
		}
		if ($this->isEnforced !== null) {
			$data->isEnforced = $this->isEnforced;
		}
		if ($this->source !== null) {
			$data->source = $this->source;
		}
		return $data;
	}
}
