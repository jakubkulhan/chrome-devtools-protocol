<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Named type Overlay.ContainerQueryContainerHighlightConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContainerQueryContainerHighlightConfig implements \JsonSerializable
{
	/**
	 * The style of the container border.
	 *
	 * @var LineStyle|null
	 */
	public $containerBorder;

	/**
	 * The style of the descendants' borders.
	 *
	 * @var LineStyle|null
	 */
	public $descendantBorder;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->containerBorder)) {
			$instance->containerBorder = LineStyle::fromJson($data->containerBorder);
		}
		if (isset($data->descendantBorder)) {
			$instance->descendantBorder = LineStyle::fromJson($data->descendantBorder);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->containerBorder !== null) {
			$data->containerBorder = $this->containerBorder->jsonSerialize();
		}
		if ($this->descendantBorder !== null) {
			$data->descendantBorder = $this->descendantBorder->jsonSerialize();
		}
		return $data;
	}
}
