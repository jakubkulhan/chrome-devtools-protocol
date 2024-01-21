<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * One of the interest groups was accessed. Note that these events are global to all targets sharing an interest group store.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InterestGroupAccessedEvent implements \JsonSerializable
{
	/** @var int|float */
	public $accessTime;

	/** @var string */
	public $type;

	/** @var string */
	public $ownerOrigin;

	/** @var string */
	public $name;

	/**
	 * For topLevelBid/topLevelAdditionalBid, and when appropriate, win and additionalBidWin
	 *
	 * @var string|null
	 */
	public $componentSellerOrigin;

	/**
	 * For bid or somethingBid event, if done locally and not on a server.
	 *
	 * @var int|float|null
	 */
	public $bid;

	/** @var string|null */
	public $bidCurrency;

	/**
	 * For non-global events --- links to interestGroupAuctionEvent
	 *
	 * @var string
	 */
	public $uniqueAuctionId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->accessTime)) {
			$instance->accessTime = $data->accessTime;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->ownerOrigin)) {
			$instance->ownerOrigin = (string)$data->ownerOrigin;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->componentSellerOrigin)) {
			$instance->componentSellerOrigin = (string)$data->componentSellerOrigin;
		}
		if (isset($data->bid)) {
			$instance->bid = $data->bid;
		}
		if (isset($data->bidCurrency)) {
			$instance->bidCurrency = (string)$data->bidCurrency;
		}
		if (isset($data->uniqueAuctionId)) {
			$instance->uniqueAuctionId = (string)$data->uniqueAuctionId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->accessTime !== null) {
			$data->accessTime = $this->accessTime;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->ownerOrigin !== null) {
			$data->ownerOrigin = $this->ownerOrigin;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->componentSellerOrigin !== null) {
			$data->componentSellerOrigin = $this->componentSellerOrigin;
		}
		if ($this->bid !== null) {
			$data->bid = $this->bid;
		}
		if ($this->bidCurrency !== null) {
			$data->bidCurrency = $this->bidCurrency;
		}
		if ($this->uniqueAuctionId !== null) {
			$data->uniqueAuctionId = $this->uniqueAuctionId;
		}
		return $data;
	}
}
