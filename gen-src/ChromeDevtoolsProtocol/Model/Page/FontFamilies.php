<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Generic font families collection.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FontFamilies implements \JsonSerializable
{
	/**
	 * The standard font-family.
	 *
	 * @var string|null
	 */
	public $standard;

	/**
	 * The fixed font-family.
	 *
	 * @var string|null
	 */
	public $fixed;

	/**
	 * The serif font-family.
	 *
	 * @var string|null
	 */
	public $serif;

	/**
	 * The sansSerif font-family.
	 *
	 * @var string|null
	 */
	public $sansSerif;

	/**
	 * The cursive font-family.
	 *
	 * @var string|null
	 */
	public $cursive;

	/**
	 * The fantasy font-family.
	 *
	 * @var string|null
	 */
	public $fantasy;

	/**
	 * The math font-family.
	 *
	 * @var string|null
	 */
	public $math;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->standard)) {
			$instance->standard = (string)$data->standard;
		}
		if (isset($data->fixed)) {
			$instance->fixed = (string)$data->fixed;
		}
		if (isset($data->serif)) {
			$instance->serif = (string)$data->serif;
		}
		if (isset($data->sansSerif)) {
			$instance->sansSerif = (string)$data->sansSerif;
		}
		if (isset($data->cursive)) {
			$instance->cursive = (string)$data->cursive;
		}
		if (isset($data->fantasy)) {
			$instance->fantasy = (string)$data->fantasy;
		}
		if (isset($data->math)) {
			$instance->math = (string)$data->math;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->standard !== null) {
			$data->standard = $this->standard;
		}
		if ($this->fixed !== null) {
			$data->fixed = $this->fixed;
		}
		if ($this->serif !== null) {
			$data->serif = $this->serif;
		}
		if ($this->sansSerif !== null) {
			$data->sansSerif = $this->sansSerif;
		}
		if ($this->cursive !== null) {
			$data->cursive = $this->cursive;
		}
		if ($this->fantasy !== null) {
			$data->fantasy = $this->fantasy;
		}
		if ($this->math !== null) {
			$data->math = $this->math;
		}
		return $data;
	}
}
