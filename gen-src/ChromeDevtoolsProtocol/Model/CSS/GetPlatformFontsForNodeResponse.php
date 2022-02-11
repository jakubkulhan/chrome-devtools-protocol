<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getPlatformFontsForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPlatformFontsForNodeResponse implements \JsonSerializable
{
	/**
	 * Usage statistics for every employed platform font.
	 *
	 * @var PlatformFontUsage[]
	 */
	public $fonts;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->fonts)) {
			$instance->fonts = [];
			foreach ($data->fonts as $item) {
				$instance->fonts[] = PlatformFontUsage::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->fonts !== null) {
			$data->fonts = [];
			foreach ($this->fonts as $item) {
				$data->fonts[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
