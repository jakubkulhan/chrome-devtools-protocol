<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Response to Browser.getBrowserCommandLine command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetBrowserCommandLineResponse implements \JsonSerializable
{
	/**
	 * Commandline parameters
	 *
	 * @var string[]
	 */
	public $arguments;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->arguments)) {
			$instance->arguments = [];
			foreach ($data->arguments as $item) {
				$instance->arguments[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->arguments !== null) {
			$data->arguments = [];
			foreach ($this->arguments as $item) {
				$data->arguments[] = $item;
			}
		}
		return $data;
	}
}
