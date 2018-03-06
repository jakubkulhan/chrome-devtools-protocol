<?php
namespace ChromeDevtoolsProtocol\Model\HeadlessExperimental;

/**
 * Request for HeadlessExperimental.enterDeterministicMode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnterDeterministicModeRequest implements \JsonSerializable
{
	/**
	 * Number of seconds since the Epoch
	 *
	 * @var int|float|null
	 */
	public $initialDate;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->initialDate)) {
			$instance->initialDate = $data->initialDate;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->initialDate !== null) {
			$data->initialDate = $this->initialDate;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EnterDeterministicModeRequestBuilder
	 */
	public static function builder(): EnterDeterministicModeRequestBuilder
	{
		return new EnterDeterministicModeRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
