<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setScriptSource command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetScriptSourceRequest implements \JsonSerializable
{
	/**
	 * Id of the script to edit.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * New content of the script.
	 *
	 * @var string
	 */
	public $scriptSource;

	/**
	 * If true the change will not actually be applied. Dry run may be used to get result description without actually modifying the code.
	 *
	 * @var bool|null
	 */
	public $dryRun;

	/**
	 * If true, then `scriptSource` is allowed to change the function on top of the stack as long as the top-most stack frame is the only activation of that function.
	 *
	 * @var bool|null
	 */
	public $allowTopFrameEditing;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->scriptSource)) {
			$instance->scriptSource = (string)$data->scriptSource;
		}
		if (isset($data->dryRun)) {
			$instance->dryRun = (bool)$data->dryRun;
		}
		if (isset($data->allowTopFrameEditing)) {
			$instance->allowTopFrameEditing = (bool)$data->allowTopFrameEditing;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->scriptSource !== null) {
			$data->scriptSource = $this->scriptSource;
		}
		if ($this->dryRun !== null) {
			$data->dryRun = $this->dryRun;
		}
		if ($this->allowTopFrameEditing !== null) {
			$data->allowTopFrameEditing = $this->allowTopFrameEditing;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetScriptSourceRequestBuilder
	 */
	public static function builder(): SetScriptSourceRequestBuilder
	{
		return new SetScriptSourceRequestBuilder();
	}
}
