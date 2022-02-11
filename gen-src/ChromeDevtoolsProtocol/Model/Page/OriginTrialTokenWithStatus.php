<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.OriginTrialTokenWithStatus.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OriginTrialTokenWithStatus implements \JsonSerializable
{
	/** @var string */
	public $rawTokenText;

	/**
	 * `parsedToken` is present only when the token is extractable and parsable.
	 *
	 * @var OriginTrialToken|null
	 */
	public $parsedToken;

	/** @var string */
	public $status;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->rawTokenText)) {
			$instance->rawTokenText = (string)$data->rawTokenText;
		}
		if (isset($data->parsedToken)) {
			$instance->parsedToken = OriginTrialToken::fromJson($data->parsedToken);
		}
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->rawTokenText !== null) {
			$data->rawTokenText = $this->rawTokenText;
		}
		if ($this->parsedToken !== null) {
			$data->parsedToken = $this->parsedToken->jsonSerialize();
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		return $data;
	}
}
