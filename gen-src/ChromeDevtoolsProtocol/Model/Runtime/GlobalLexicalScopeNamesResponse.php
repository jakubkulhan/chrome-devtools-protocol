<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Response to Runtime.globalLexicalScopeNames command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GlobalLexicalScopeNamesResponse implements \JsonSerializable
{
	/** @var string[] */
	public $names;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->names)) {
			$instance->names = [];
			foreach ($data->names as $item) {
				$instance->names[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->names !== null) {
			$data->names = [];
			foreach ($this->names as $item) {
				$data->names[] = $item;
			}
		}
		return $data;
	}
}
