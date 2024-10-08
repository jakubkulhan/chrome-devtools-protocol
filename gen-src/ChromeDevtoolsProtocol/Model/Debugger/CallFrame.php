<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;

/**
 * JavaScript call frame. Array of call frames form the call stack.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CallFrame implements \JsonSerializable
{
	/**
	 * Call frame identifier. This identifier is only valid while the virtual machine is paused.
	 *
	 * @var string
	 */
	public $callFrameId;

	/**
	 * Name of the JavaScript function called on this call frame.
	 *
	 * @var string
	 */
	public $functionName;

	/**
	 * Location in the source code.
	 *
	 * @var Location|null
	 */
	public $functionLocation;

	/**
	 * Location in the source code.
	 *
	 * @var Location
	 */
	public $location;

	/**
	 * JavaScript script name or url. Deprecated in favor of using the `location.scriptId` to resolve the URL via a previously sent `Debugger.scriptParsed` event.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Scope chain for this call frame.
	 *
	 * @var Scope[]
	 */
	public $scopeChain;

	/**
	 * `this` object for this call frame.
	 *
	 * @var RemoteObject
	 */
	public $this;

	/**
	 * The value being returned, if the function is at return point.
	 *
	 * @var RemoteObject|null
	 */
	public $returnValue;

	/**
	 * Valid only while the VM is paused and indicates whether this frame can be restarted or not. Note that a `true` value here does not guarantee that Debugger#restartFrame with this CallFrameId will be successful, but it is very likely.
	 *
	 * @var bool|null
	 */
	public $canBeRestarted;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->callFrameId)) {
			$instance->callFrameId = (string)$data->callFrameId;
		}
		if (isset($data->functionName)) {
			$instance->functionName = (string)$data->functionName;
		}
		if (isset($data->functionLocation)) {
			$instance->functionLocation = Location::fromJson($data->functionLocation);
		}
		if (isset($data->location)) {
			$instance->location = Location::fromJson($data->location);
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->scopeChain)) {
			$instance->scopeChain = [];
			foreach ($data->scopeChain as $item) {
				$instance->scopeChain[] = Scope::fromJson($item);
			}
		}
		if (isset($data->this)) {
			$instance->this = RemoteObject::fromJson($data->this);
		}
		if (isset($data->returnValue)) {
			$instance->returnValue = RemoteObject::fromJson($data->returnValue);
		}
		if (isset($data->canBeRestarted)) {
			$instance->canBeRestarted = (bool)$data->canBeRestarted;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->callFrameId !== null) {
			$data->callFrameId = $this->callFrameId;
		}
		if ($this->functionName !== null) {
			$data->functionName = $this->functionName;
		}
		if ($this->functionLocation !== null) {
			$data->functionLocation = $this->functionLocation->jsonSerialize();
		}
		if ($this->location !== null) {
			$data->location = $this->location->jsonSerialize();
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->scopeChain !== null) {
			$data->scopeChain = [];
			foreach ($this->scopeChain as $item) {
				$data->scopeChain[] = $item->jsonSerialize();
			}
		}
		if ($this->this !== null) {
			$data->this = $this->this->jsonSerialize();
		}
		if ($this->returnValue !== null) {
			$data->returnValue = $this->returnValue->jsonSerialize();
		}
		if ($this->canBeRestarted !== null) {
			$data->canBeRestarted = $this->canBeRestarted;
		}
		return $data;
	}
}
