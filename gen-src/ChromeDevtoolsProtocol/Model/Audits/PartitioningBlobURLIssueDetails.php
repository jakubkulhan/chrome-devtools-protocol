<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.PartitioningBlobURLIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PartitioningBlobURLIssueDetails implements \JsonSerializable
{
	/**
	 * The BlobURL that failed to load.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Additional information about the Partitioning Blob URL issue.
	 *
	 * @var string
	 */
	public $partitioningBlobURLInfo;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->partitioningBlobURLInfo)) {
			$instance->partitioningBlobURLInfo = (string)$data->partitioningBlobURLInfo;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->partitioningBlobURLInfo !== null) {
			$data->partitioningBlobURLInfo = $this->partitioningBlobURLInfo;
		}
		return $data;
	}
}
