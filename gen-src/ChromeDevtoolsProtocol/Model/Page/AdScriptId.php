<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Identifies the bottom-most script which caused the frame to be labelled as an ad.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdScriptId implements \JsonSerializable
{
	/**
	 * Script Id of the bottom-most script which caused the frame to be labelled as an ad.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * Id of adScriptId's debugger.
	 *
	 * @var string
	 */
	public $debuggerId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->debuggerId)) {
			$instance->debuggerId = (string)$data->debuggerId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->debuggerId !== null) {
			$data->debuggerId = $this->debuggerId;
		}
		return $data;
	}
}
