<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Maps to the |SCARD_STATE_*| flags.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReaderStateFlags implements \JsonSerializable
{
	/** @var bool|null */
	public $unaware;

	/** @var bool|null */
	public $ignore;

	/** @var bool|null */
	public $changed;

	/** @var bool|null */
	public $unknown;

	/** @var bool|null */
	public $unavailable;

	/** @var bool|null */
	public $empty;

	/** @var bool|null */
	public $present;

	/** @var bool|null */
	public $exclusive;

	/** @var bool|null */
	public $inuse;

	/** @var bool|null */
	public $mute;

	/** @var bool|null */
	public $unpowered;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->unaware)) {
			$instance->unaware = (bool)$data->unaware;
		}
		if (isset($data->ignore)) {
			$instance->ignore = (bool)$data->ignore;
		}
		if (isset($data->changed)) {
			$instance->changed = (bool)$data->changed;
		}
		if (isset($data->unknown)) {
			$instance->unknown = (bool)$data->unknown;
		}
		if (isset($data->unavailable)) {
			$instance->unavailable = (bool)$data->unavailable;
		}
		if (isset($data->empty)) {
			$instance->empty = (bool)$data->empty;
		}
		if (isset($data->present)) {
			$instance->present = (bool)$data->present;
		}
		if (isset($data->exclusive)) {
			$instance->exclusive = (bool)$data->exclusive;
		}
		if (isset($data->inuse)) {
			$instance->inuse = (bool)$data->inuse;
		}
		if (isset($data->mute)) {
			$instance->mute = (bool)$data->mute;
		}
		if (isset($data->unpowered)) {
			$instance->unpowered = (bool)$data->unpowered;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->unaware !== null) {
			$data->unaware = $this->unaware;
		}
		if ($this->ignore !== null) {
			$data->ignore = $this->ignore;
		}
		if ($this->changed !== null) {
			$data->changed = $this->changed;
		}
		if ($this->unknown !== null) {
			$data->unknown = $this->unknown;
		}
		if ($this->unavailable !== null) {
			$data->unavailable = $this->unavailable;
		}
		if ($this->empty !== null) {
			$data->empty = $this->empty;
		}
		if ($this->present !== null) {
			$data->present = $this->present;
		}
		if ($this->exclusive !== null) {
			$data->exclusive = $this->exclusive;
		}
		if ($this->inuse !== null) {
			$data->inuse = $this->inuse;
		}
		if ($this->mute !== null) {
			$data->mute = $this->mute;
		}
		if ($this->unpowered !== null) {
			$data->unpowered = $this->unpowered;
		}
		return $data;
	}
}
