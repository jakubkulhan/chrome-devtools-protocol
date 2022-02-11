<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.createIsolatedWorld command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateIsolatedWorldResponse implements \JsonSerializable
{
	/**
	 * Execution context of the isolated world.
	 *
	 * @var int
	 */
	public $executionContextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		return $data;
	}
}
