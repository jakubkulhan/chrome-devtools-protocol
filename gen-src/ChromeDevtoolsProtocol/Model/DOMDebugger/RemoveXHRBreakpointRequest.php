<?php

namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

/**
 * Request for DOMDebugger.removeXHRBreakpoint command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveXHRBreakpointRequest implements \JsonSerializable
{
	/**
	 * Resource URL substring.
	 *
	 * @var string
	 */
	public $url;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveXHRBreakpointRequestBuilder
	 */
	public static function builder(): RemoveXHRBreakpointRequestBuilder
	{
		return new RemoveXHRBreakpointRequestBuilder();
	}
}
