<?php

namespace ChromeDevtoolsProtocol\Model\Ads;

/**
 * Response to Ads.getAdScripts command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAdScriptsResponse implements \JsonSerializable
{
	/** @var AdScript[] */
	public $newScripts;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->newScripts)) {
			$instance->newScripts = [];
			foreach ($data->newScripts as $item) {
				$instance->newScripts[] = AdScript::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->newScripts !== null) {
			$data->newScripts = [];
			foreach ($this->newScripts as $item) {
				$data->newScripts[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
