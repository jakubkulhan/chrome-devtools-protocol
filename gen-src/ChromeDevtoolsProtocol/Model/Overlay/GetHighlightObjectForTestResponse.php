<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Response to Overlay.getHighlightObjectForTest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHighlightObjectForTestResponse implements \JsonSerializable
{
	/**
	 * Highlight data for the node.
	 *
	 * @var object
	 */
	public $highlight;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->highlight)) {
			$instance->highlight = $data->highlight;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->highlight !== null) {
			$data->highlight = $this->highlight;
		}
		return $data;
	}
}
