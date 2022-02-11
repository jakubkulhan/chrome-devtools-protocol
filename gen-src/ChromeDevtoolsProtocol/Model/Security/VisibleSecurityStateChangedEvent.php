<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * The security state of the page changed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class VisibleSecurityStateChangedEvent implements \JsonSerializable
{
	/**
	 * Security state information about the page.
	 *
	 * @var VisibleSecurityState
	 */
	public $visibleSecurityState;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->visibleSecurityState)) {
			$instance->visibleSecurityState = VisibleSecurityState::fromJson($data->visibleSecurityState);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->visibleSecurityState !== null) {
			$data->visibleSecurityState = $this->visibleSecurityState->jsonSerialize();
		}
		return $data;
	}
}
