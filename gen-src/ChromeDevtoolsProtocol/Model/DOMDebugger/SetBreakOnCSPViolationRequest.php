<?php

namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

/**
 * Request for DOMDebugger.setBreakOnCSPViolation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakOnCSPViolationRequest implements \JsonSerializable
{
	/**
	 * CSP Violations to stop upon.
	 *
	 * @var string[]
	 */
	public $violationTypes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->violationTypes)) {
			$instance->violationTypes = [];
		if (isset($data->violationTypes)) {
			$instance->violationTypes = [];
			foreach ($data->violationTypes as $item) {
				$instance->violationTypes[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->violationTypes !== null) {
			$data->violationTypes = [];
		if ($this->violationTypes !== null) {
			$data->violationTypes = [];
			foreach ($this->violationTypes as $item) {
				$data->violationTypes[] = $item;
			}
		}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBreakOnCSPViolationRequestBuilder
	 */
	public static function builder(): SetBreakOnCSPViolationRequestBuilder
	{
		return new SetBreakOnCSPViolationRequestBuilder();
	}
}
