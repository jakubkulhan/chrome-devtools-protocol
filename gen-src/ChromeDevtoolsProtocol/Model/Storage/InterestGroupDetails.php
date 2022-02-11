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
	public $biddingUrl;

	/** @var string|null */
	public $biddingWasmHelperUrl;

	/** @var string|null */
	public $updateUrl;

	/** @var string|null */
	public $trustedBiddingSignalsUrl;

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
		if (isset($data->biddingUrl)) {
			$instance->biddingUrl = (string)$data->biddingUrl;
		}
		if (isset($data->biddingWasmHelperUrl)) {
			$instance->biddingWasmHelperUrl = (string)$data->biddingWasmHelperUrl;
		}
		if (isset($data->updateUrl)) {
			$instance->updateUrl = (string)$data->updateUrl;
		}
		if (isset($data->trustedBiddingSignalsUrl)) {
			$instance->trustedBiddingSignalsUrl = (string)$data->trustedBiddingSignalsUrl;
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
		if ($this->biddingUrl !== null) {
			$data->biddingUrl = $this->biddingUrl;
		}
		if ($this->biddingWasmHelperUrl !== null) {
			$data->biddingWasmHelperUrl = $this->biddingWasmHelperUrl;
		}
		if ($this->updateUrl !== null) {
			$data->updateUrl = $this->updateUrl;
		}
		if ($this->trustedBiddingSignalsUrl !== null) {
			$data->trustedBiddingSignalsUrl = $this->trustedBiddingSignalsUrl;
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
