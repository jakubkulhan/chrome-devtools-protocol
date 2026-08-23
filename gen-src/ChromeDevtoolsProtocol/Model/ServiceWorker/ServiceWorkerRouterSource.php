<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Corresponds to `RouterSource` in the spec while the representation is different as follows. (https://www.w3.org/TR/service-workers/#typedefdef-routersource) - `RouterSourceEnum`: `type` equals `cache`, `sourceDict` is null. - `RouterSourceDict`: `type` equals `sourceDict`, `sourceDict` has valid value.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ServiceWorkerRouterSource implements \JsonSerializable
{
	/** @var string */
	public $type;

	/**
	 * Non-empty iff `type` equals "sourceDict".
	 *
	 * @var ServiceWorkerRouterSourceDict|null
	 */
	public $sourceDict;


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
		if (isset($data->sourceDict)) {
			$instance->sourceDict = ServiceWorkerRouterSourceDict::fromJson($data->sourceDict);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->sourceDict !== null) {
			$data->sourceDict = $this->sourceDict->jsonSerialize();
		}
		return $data;
	}
}
