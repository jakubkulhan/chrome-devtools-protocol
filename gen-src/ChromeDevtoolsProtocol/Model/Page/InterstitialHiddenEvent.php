<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when interstitial page was hidden
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InterstitialHiddenEvent implements \JsonSerializable
{
	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		return $data;
	}
}
