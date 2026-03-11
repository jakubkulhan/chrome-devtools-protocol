<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

/**
 * Tool annotations
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Annotation implements \JsonSerializable
{
	/**
	 * A hint indicating that the tool does not modify any state.
	 *
	 * @var bool|null
	 */
	public $readOnly;

	/**
	 * If the declarative tool was declared with the autosubmit attribute.
	 *
	 * @var bool|null
	 */
	public $autosubmit;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->readOnly)) {
			$instance->readOnly = (bool)$data->readOnly;
		}
		if (isset($data->autosubmit)) {
			$instance->autosubmit = (bool)$data->autosubmit;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->readOnly !== null) {
			$data->readOnly = $this->readOnly;
		}
		if ($this->autosubmit !== null) {
			$data->autosubmit = $this->autosubmit;
		}
		return $data;
	}
}
