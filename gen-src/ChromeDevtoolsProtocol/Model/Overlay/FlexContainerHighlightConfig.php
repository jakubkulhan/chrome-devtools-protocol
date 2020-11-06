<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Configuration data for the highlighting of Flex container elements.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FlexContainerHighlightConfig implements \JsonSerializable
{
	/**
	 * The style of the container border
	 *
	 * @var LineStyle|null
	 */
	public $containerBorder;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->containerBorder)) {
			$instance->containerBorder = LineStyle::fromJson($data->containerBorder);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->containerBorder !== null) {
			$data->containerBorder = $this->containerBorder->jsonSerialize();
		}
		return $data;
	}
}
