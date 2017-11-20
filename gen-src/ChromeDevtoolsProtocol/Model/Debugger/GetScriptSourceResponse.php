<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.getScriptSource command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetScriptSourceResponse implements \JsonSerializable
{
	/**
	 * Script source.
	 *
	 * @var string
	 */
	public $scriptSource;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptSource)) {
			$instance->scriptSource = (string)$data->scriptSource;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptSource !== null) {
			$data->scriptSource = $this->scriptSource;
		}
		return $data;
	}
}
