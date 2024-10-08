<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * A single Related Website Set object.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RelatedWebsiteSet implements \JsonSerializable
{
	/**
	 * The primary site of this set, along with the ccTLDs if there is any.
	 *
	 * @var string[]
	 */
	public $primarySites;

	/**
	 * The associated sites of this set, along with the ccTLDs if there is any.
	 *
	 * @var string[]
	 */
	public $associatedSites;

	/**
	 * The service sites of this set, along with the ccTLDs if there is any.
	 *
	 * @var string[]
	 */
	public $serviceSites;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->primarySites)) {
			$instance->primarySites = [];
			foreach ($data->primarySites as $item) {
				$instance->primarySites[] = (string)$item;
			}
		}
		if (isset($data->associatedSites)) {
			$instance->associatedSites = [];
			foreach ($data->associatedSites as $item) {
				$instance->associatedSites[] = (string)$item;
			}
		}
		if (isset($data->serviceSites)) {
			$instance->serviceSites = [];
			foreach ($data->serviceSites as $item) {
				$instance->serviceSites[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->primarySites !== null) {
			$data->primarySites = [];
			foreach ($this->primarySites as $item) {
				$data->primarySites[] = $item;
			}
		}
		if ($this->associatedSites !== null) {
			$data->associatedSites = [];
			foreach ($this->associatedSites as $item) {
				$data->associatedSites[] = $item;
			}
		}
		if ($this->serviceSites !== null) {
			$data->serviceSites = [];
			foreach ($this->serviceSites as $item) {
				$data->serviceSites[] = $item;
			}
		}
		return $data;
	}
}
