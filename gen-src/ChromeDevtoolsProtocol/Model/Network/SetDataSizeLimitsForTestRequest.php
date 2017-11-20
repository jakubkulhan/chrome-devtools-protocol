<?php
namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setDataSizeLimitsForTest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDataSizeLimitsForTestRequest implements \JsonSerializable
{
	/**
	 * Maximum total buffer size.
	 *
	 * @var int
	 */
	public $maxTotalSize;

	/**
	 * Maximum per-resource size.
	 *
	 * @var int
	 */
	public $maxResourceSize;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->maxTotalSize)) {
			$instance->maxTotalSize = (int)$data->maxTotalSize;
		}
		if (isset($data->maxResourceSize)) {
			$instance->maxResourceSize = (int)$data->maxResourceSize;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->maxTotalSize !== null) {
			$data->maxTotalSize = $this->maxTotalSize;
		}
		if ($this->maxResourceSize !== null) {
			$data->maxResourceSize = $this->maxResourceSize;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDataSizeLimitsForTestRequestBuilder
	 */
	public static function builder(): SetDataSizeLimitsForTestRequestBuilder
	{
		return new SetDataSizeLimitsForTestRequestBuilder();
	}
}
