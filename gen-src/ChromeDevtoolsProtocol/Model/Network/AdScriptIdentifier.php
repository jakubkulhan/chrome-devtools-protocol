<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Identifies the script on the stack that caused a resource or element to be labeled as an ad. For resources, this indicates the context that triggered the fetch. For elements, this indicates the context that caused the element to be appended to the DOM.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdScriptIdentifier implements \JsonSerializable
{
	/**
	 * The script's V8 identifier.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * V8's debugging ID for the v8::Context.
	 *
	 * @var string
	 */
	public $debuggerId;

	/**
	 * The script's url (or generated name based on id if inline script).
	 *
	 * @var string
	 */
	public $name;


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
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
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
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		return $data;
	}
}
