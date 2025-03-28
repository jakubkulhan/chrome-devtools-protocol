<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Shared storage was accessed by the associated page. The following parameters are included in all events.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedStorageAccessedEvent implements \JsonSerializable
{
	/**
	 * Time of the access.
	 *
	 * @var int|float
	 */
	public $accessTime;

	/**
	 * Enum value indicating the access scope.
	 *
	 * @var string
	 */
	public $scope;

	/**
	 * Enum value indicating the Shared Storage API method invoked.
	 *
	 * @var string
	 */
	public $method;

	/**
	 * DevTools Frame Token for the primary frame tree's root.
	 *
	 * @var string
	 */
	public $mainFrameId;

	/**
	 * Serialization of the origin owning the Shared Storage data.
	 *
	 * @var string
	 */
	public $ownerOrigin;

	/**
	 * Serialization of the site owning the Shared Storage data.
	 *
	 * @var string
	 */
	public $ownerSite;

	/**
	 * The sub-parameters wrapped by `params` are all optional and their presence/absence depends on `type`.
	 *
	 * @var SharedStorageAccessParams
	 */
	public $params;


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
		if (isset($data->scope)) {
			$instance->scope = (string)$data->scope;
		}
		if (isset($data->method)) {
			$instance->method = (string)$data->method;
		}
		if (isset($data->mainFrameId)) {
			$instance->mainFrameId = (string)$data->mainFrameId;
		}
		if (isset($data->ownerOrigin)) {
			$instance->ownerOrigin = (string)$data->ownerOrigin;
		}
		if (isset($data->ownerSite)) {
			$instance->ownerSite = (string)$data->ownerSite;
		}
		if (isset($data->params)) {
			$instance->params = SharedStorageAccessParams::fromJson($data->params);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->accessTime !== null) {
			$data->accessTime = $this->accessTime;
		}
		if ($this->scope !== null) {
			$data->scope = $this->scope;
		}
		if ($this->method !== null) {
			$data->method = $this->method;
		}
		if ($this->mainFrameId !== null) {
			$data->mainFrameId = $this->mainFrameId;
		}
		if ($this->ownerOrigin !== null) {
			$data->ownerOrigin = $this->ownerOrigin;
		}
		if ($this->ownerSite !== null) {
			$data->ownerSite = $this->ownerSite;
		}
		if ($this->params !== null) {
			$data->params = $this->params->jsonSerialize();
		}
		return $data;
	}
}
