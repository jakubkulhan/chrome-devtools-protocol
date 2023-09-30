<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * The full details of an interest group.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InterestGroupDetails implements \JsonSerializable
{
	/** @var string */
	public $ownerOrigin;

	/** @var string */
	public $name;

	/** @var int|float */
	public $expirationTime;

	/** @var string */
	public $joiningOrigin;

	/** @var string|null */
	public $biddingLogicURL;

	/** @var string|null */
	public $biddingWasmHelperURL;

	/** @var string|null */
	public $updateURL;

	/** @var string|null */
	public $trustedBiddingSignalsURL;

	/** @var string[] */
	public $trustedBiddingSignalsKeys;

	/** @var string|null */
	public $userBiddingSignals;

	/** @var InterestGroupAd[] */
	public $ads;

	/** @var InterestGroupAd[] */
	public $adComponents;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ownerOrigin)) {
			$instance->ownerOrigin = (string)$data->ownerOrigin;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->expirationTime)) {
			$instance->expirationTime = $data->expirationTime;
		}
		if (isset($data->joiningOrigin)) {
			$instance->joiningOrigin = (string)$data->joiningOrigin;
		}
		if (isset($data->biddingLogicURL)) {
			$instance->biddingLogicURL = (string)$data->biddingLogicURL;
		}
		if (isset($data->biddingWasmHelperURL)) {
			$instance->biddingWasmHelperURL = (string)$data->biddingWasmHelperURL;
		}
		if (isset($data->updateURL)) {
			$instance->updateURL = (string)$data->updateURL;
		}
		if (isset($data->trustedBiddingSignalsURL)) {
			$instance->trustedBiddingSignalsURL = (string)$data->trustedBiddingSignalsURL;
		}
		if (isset($data->trustedBiddingSignalsKeys)) {
			$instance->trustedBiddingSignalsKeys = [];
			foreach ($data->trustedBiddingSignalsKeys as $item) {
				$instance->trustedBiddingSignalsKeys[] = (string)$item;
			}
		}
		if (isset($data->userBiddingSignals)) {
			$instance->userBiddingSignals = (string)$data->userBiddingSignals;
		}
		if (isset($data->ads)) {
			$instance->ads = [];
			foreach ($data->ads as $item) {
				$instance->ads[] = InterestGroupAd::fromJson($item);
			}
		}
		if (isset($data->adComponents)) {
			$instance->adComponents = [];
			foreach ($data->adComponents as $item) {
				$instance->adComponents[] = InterestGroupAd::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ownerOrigin !== null) {
			$data->ownerOrigin = $this->ownerOrigin;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->expirationTime !== null) {
			$data->expirationTime = $this->expirationTime;
		}
		if ($this->joiningOrigin !== null) {
			$data->joiningOrigin = $this->joiningOrigin;
		}
		if ($this->biddingLogicURL !== null) {
			$data->biddingLogicURL = $this->biddingLogicURL;
		}
		if ($this->biddingWasmHelperURL !== null) {
			$data->biddingWasmHelperURL = $this->biddingWasmHelperURL;
		}
		if ($this->updateURL !== null) {
			$data->updateURL = $this->updateURL;
		}
		if ($this->trustedBiddingSignalsURL !== null) {
			$data->trustedBiddingSignalsURL = $this->trustedBiddingSignalsURL;
		}
		if ($this->trustedBiddingSignalsKeys !== null) {
			$data->trustedBiddingSignalsKeys = [];
			foreach ($this->trustedBiddingSignalsKeys as $item) {
				$data->trustedBiddingSignalsKeys[] = $item;
			}
		}
		if ($this->userBiddingSignals !== null) {
			$data->userBiddingSignals = $this->userBiddingSignals;
		}
		if ($this->ads !== null) {
			$data->ads = [];
			foreach ($this->ads as $item) {
				$data->ads[] = $item->jsonSerialize();
			}
		}
		if ($this->adComponents !== null) {
			$data->adComponents = [];
			foreach ($this->adComponents as $item) {
				$data->adComponents[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
