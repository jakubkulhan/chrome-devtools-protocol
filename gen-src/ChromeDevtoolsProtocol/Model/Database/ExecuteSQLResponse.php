<?php

namespace ChromeDevtoolsProtocol\Model\Database;

/**
 * Response to Database.executeSQL command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecuteSQLResponse implements \JsonSerializable
{
	/** @var string[]|null */
	public $columnNames;

	/** @var mixed[]|null */
	public $values;

	/** @var Error|null */
	public $sqlError;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->columnNames)) {
			$instance->columnNames = [];
			foreach ($data->columnNames as $item) {
				$instance->columnNames[] = (string)$item;
			}
		}
		if (isset($data->values)) {
			$instance->values = [];
			foreach ($data->values as $item) {
				$instance->values[] = $item;
			}
		}
		if (isset($data->sqlError)) {
			$instance->sqlError = Error::fromJson($data->sqlError);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->columnNames !== null) {
			$data->columnNames = [];
			foreach ($this->columnNames as $item) {
				$data->columnNames[] = $item;
			}
		}
		if ($this->values !== null) {
			$data->values = [];
			foreach ($this->values as $item) {
				$data->values[] = $item;
			}
		}
		if ($this->sqlError !== null) {
			$data->sqlError = $this->sqlError->jsonSerialize();
		}
		return $data;
	}
}
