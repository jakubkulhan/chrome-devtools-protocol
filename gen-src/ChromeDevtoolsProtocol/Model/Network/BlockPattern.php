<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.BlockPattern.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BlockPattern implements \JsonSerializable
{
	/**
	 * URL pattern to match. Patterns use the URLPattern constructor string syntax (https://urlpattern.spec.whatwg.org/) and must be absolute. Example: `*://*:* /*.css`.
	 *
	 * @var string
	 */
	public $urlPattern;

	/**
	 * Whether or not to block the pattern. If false, a matching request will not be blocked even if it matches a later `BlockPattern`.
	 *
	 * @var bool
	 */
	public $block;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->urlPattern)) {
			$instance->urlPattern = (string)$data->urlPattern;
		}
		if (isset($data->block)) {
			$instance->block = (bool)$data->block;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->urlPattern !== null) {
			$data->urlPattern = $this->urlPattern;
		}
		if ($this->block !== null) {
			$data->block = $this->block;
		}
		return $data;
	}
}
