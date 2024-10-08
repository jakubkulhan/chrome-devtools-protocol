<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getInstallabilityErrors command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetInstallabilityErrorsResponse implements \JsonSerializable
{
	/** @var InstallabilityError[] */
	public $installabilityErrors;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->installabilityErrors)) {
			$instance->installabilityErrors = [];
			foreach ($data->installabilityErrors as $item) {
				$instance->installabilityErrors[] = InstallabilityError::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->installabilityErrors !== null) {
			$data->installabilityErrors = [];
			foreach ($this->installabilityErrors as $item) {
				$data->installabilityErrors[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
