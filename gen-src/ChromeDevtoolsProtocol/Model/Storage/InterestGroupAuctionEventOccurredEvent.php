<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * An auction involving interest groups is taking place. These events are target-specific.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InterestGroupAuctionEventOccurredEvent implements \JsonSerializable
{
	/** @var int|float */
	public $eventTime;

	/** @var string */
	public $type;

	/** @var string */
	public $uniqueAuctionId;

	/**
	 * Set for child auctions.
	 *
	 * @var string
	 */
	public $parentAuctionId;

	/**
	 * Set for started and configResolved
	 *
	 * @var object|null
	 */
	public $auctionConfig;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->eventTime)) {
			$instance->eventTime = $data->eventTime;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->uniqueAuctionId)) {
			$instance->uniqueAuctionId = (string)$data->uniqueAuctionId;
		}
		if (isset($data->parentAuctionId)) {
			$instance->parentAuctionId = (string)$data->parentAuctionId;
		}
		if (isset($data->auctionConfig)) {
			$instance->auctionConfig = $data->auctionConfig;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->eventTime !== null) {
			$data->eventTime = $this->eventTime;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->uniqueAuctionId !== null) {
			$data->uniqueAuctionId = $this->uniqueAuctionId;
		}
		if ($this->parentAuctionId !== null) {
			$data->parentAuctionId = $this->parentAuctionId;
		}
		if ($this->auctionConfig !== null) {
			$data->auctionConfig = $this->auctionConfig;
		}
		return $data;
	}
}
