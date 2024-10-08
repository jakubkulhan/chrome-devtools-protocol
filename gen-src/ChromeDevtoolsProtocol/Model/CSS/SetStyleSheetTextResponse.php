<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setStyleSheetText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetStyleSheetTextResponse implements \JsonSerializable
{
	/**
	 * URL of source map associated with script (if any).
	 *
	 * @var string|null
	 */
	public $sourceMapURL;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sourceMapURL)) {
			$instance->sourceMapURL = (string)$data->sourceMapURL;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sourceMapURL !== null) {
			$data->sourceMapURL = $this->sourceMapURL;
		}
		return $data;
	}
}
