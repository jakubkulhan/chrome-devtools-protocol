<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.clearTrustTokens command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearTrustTokensResponse implements \JsonSerializable
{
	/**
	 * True if any tokens were deleted, false otherwise.
	 *
	 * @var bool
	 */
	public $didDeleteTokens;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->didDeleteTokens)) {
			$instance->didDeleteTokens = (bool)$data->didDeleteTokens;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->didDeleteTokens !== null) {
			$data->didDeleteTokens = $this->didDeleteTokens;
		}
		return $data;
	}
}
