<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.getTrustTokens command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetTrustTokensResponse implements \JsonSerializable
{
	/** @var TrustTokens[] */
	public $tokens;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->tokens)) {
			$instance->tokens = [];
			foreach ($data->tokens as $item) {
				$instance->tokens[] = TrustTokens::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->tokens !== null) {
			$data->tokens = [];
			foreach ($this->tokens as $item) {
				$data->tokens[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
