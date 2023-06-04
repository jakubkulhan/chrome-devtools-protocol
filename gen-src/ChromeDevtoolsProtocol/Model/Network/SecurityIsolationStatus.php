<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.SecurityIsolationStatus.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SecurityIsolationStatus implements \JsonSerializable
{
	/** @var CrossOriginOpenerPolicyStatus|null */
	public $coop;

	/** @var CrossOriginEmbedderPolicyStatus|null */
	public $coep;

	/** @var ContentSecurityPolicyStatus[]|null */
	public $csp;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->coop)) {
			$instance->coop = CrossOriginOpenerPolicyStatus::fromJson($data->coop);
		}
		if (isset($data->coep)) {
			$instance->coep = CrossOriginEmbedderPolicyStatus::fromJson($data->coep);
		}
		if (isset($data->csp)) {
			$instance->csp = [];
			foreach ($data->csp as $item) {
				$instance->csp[] = ContentSecurityPolicyStatus::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->coop !== null) {
			$data->coop = $this->coop->jsonSerialize();
		}
		if ($this->coep !== null) {
			$data->coep = $this->coep->jsonSerialize();
		}
		if ($this->csp !== null) {
			$data->csp = [];
			foreach ($this->csp as $item) {
				$data->csp[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
