<?php

namespace ChromeDevtoolsProtocol\Model\Schema;

/**
 * Response to Schema.getDomains command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDomainsResponse implements \JsonSerializable
{
	/**
	 * List of supported domains.
	 *
	 * @var Domain[]
	 */
	public $domains;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->domains)) {
			$instance->domains = [];
			foreach ($data->domains as $item) {
				$instance->domains[] = Domain::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->domains !== null) {
			$data->domains = [];
			foreach ($this->domains as $item) {
				$data->domains[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
