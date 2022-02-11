<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * The installability error
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InstallabilityError implements \JsonSerializable
{
	/**
	 * The error id (e.g. 'manifest-missing-suitable-icon').
	 *
	 * @var string
	 */
	public $errorId;

	/**
	 * The list of error arguments (e.g. {name:'minimum-icon-size-in-pixels', value:'64'}).
	 *
	 * @var InstallabilityErrorArgument[]
	 */
	public $errorArguments;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->errorId)) {
			$instance->errorId = (string)$data->errorId;
		}
		if (isset($data->errorArguments)) {
			$instance->errorArguments = [];
			foreach ($data->errorArguments as $item) {
				$instance->errorArguments[] = InstallabilityErrorArgument::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->errorId !== null) {
			$data->errorId = $this->errorId;
		}
		if ($this->errorArguments !== null) {
			$data->errorArguments = [];
			foreach ($this->errorArguments as $item) {
				$data->errorArguments[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
