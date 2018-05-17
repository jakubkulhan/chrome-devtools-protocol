<?php
namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Information about a signed exchange signature. https://wicg.github.io/webpackage/draft-yasskin-httpbis-origin-signed-exchanges-impl.html#rfc.section.3.1
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SignedExchangeSignature implements \JsonSerializable
{
	/**
	 * Signed exchange signature label.
	 *
	 * @var string
	 */
	public $label;

	/**
	 * Signed exchange signature integrity.
	 *
	 * @var string
	 */
	public $integrity;

	/**
	 * Signed exchange signature cert Url.
	 *
	 * @var string
	 */
	public $certUrl;

	/**
	 * Signed exchange signature validity Url.
	 *
	 * @var string
	 */
	public $validityUrl;

	/**
	 * Signed exchange signature date.
	 *
	 * @var int
	 */
	public $date;

	/**
	 * Signed exchange signature expires.
	 *
	 * @var int
	 */
	public $expires;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->label)) {
			$instance->label = (string)$data->label;
		}
		if (isset($data->integrity)) {
			$instance->integrity = (string)$data->integrity;
		}
		if (isset($data->certUrl)) {
			$instance->certUrl = (string)$data->certUrl;
		}
		if (isset($data->validityUrl)) {
			$instance->validityUrl = (string)$data->validityUrl;
		}
		if (isset($data->date)) {
			$instance->date = (int)$data->date;
		}
		if (isset($data->expires)) {
			$instance->expires = (int)$data->expires;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->label !== null) {
			$data->label = $this->label;
		}
		if ($this->integrity !== null) {
			$data->integrity = $this->integrity;
		}
		if ($this->certUrl !== null) {
			$data->certUrl = $this->certUrl;
		}
		if ($this->validityUrl !== null) {
			$data->validityUrl = $this->validityUrl;
		}
		if ($this->date !== null) {
			$data->date = $this->date;
		}
		if ($this->expires !== null) {
			$data->expires = $this->expires;
		}
		return $data;
	}
}
