<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getAdScriptId command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAdScriptIdResponse implements \JsonSerializable
{
	/**
	 * Identifies the bottom-most script which caused the frame to be labelled as an ad. Only sent if frame is labelled as an ad and id is available.
	 *
	 * @var AdScriptId|null
	 */
	public $adScriptId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->adScriptId)) {
			$instance->adScriptId = AdScriptId::fromJson($data->adScriptId);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->adScriptId !== null) {
			$data->adScriptId = $this->adScriptId->jsonSerialize();
		}
		return $data;
	}
}
