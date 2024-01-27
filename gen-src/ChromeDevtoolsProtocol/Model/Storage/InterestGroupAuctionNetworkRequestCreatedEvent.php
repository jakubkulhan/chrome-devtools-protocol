<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Specifies which auctions a particular network fetch may be related to, and in what role. Note that it is not ordered with respect to Network.requestWillBeSent (but will happen before loadingFinished loadingFailed).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InterestGroupAuctionNetworkRequestCreatedEvent implements \JsonSerializable
{
	/** @var string */
	public $type;

	/** @var string */
	public $requestId;

	/**
	 * This is the set of the auctions using the worklet that issued this request. In the case of trusted signals, it's possible that only some of them actually care about the keys being queried.
	 *
	 * @var string[]
	 */
	public $auctions;


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
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->auctions)) {
			$instance->auctions = [];
		if (isset($data->auctions)) {
			$instance->auctions = [];
			foreach ($data->auctions as $item) {
				$instance->auctions[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->auctions !== null) {
			$data->auctions = [];
		if ($this->auctions !== null) {
			$data->auctions = [];
			foreach ($this->auctions as $item) {
				$data->auctions[] = $item;
			}
		}
		}
		return $data;
	}
}
