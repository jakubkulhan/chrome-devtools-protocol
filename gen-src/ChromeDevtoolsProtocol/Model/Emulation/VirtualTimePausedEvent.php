<?php
namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Notification sent after the virtual time has paused.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class VirtualTimePausedEvent implements \JsonSerializable
{
	/**
	 * The amount of virtual time that has elapsed in milliseconds since virtual time was first enabled.
	 *
	 * @var int|float
	 */
	public $virtualTimeElapsed;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->virtualTimeElapsed)) {
			$instance->virtualTimeElapsed = $data->virtualTimeElapsed;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->virtualTimeElapsed !== null) {
			$data->virtualTimeElapsed = $this->virtualTimeElapsed;
		}
		return $data;
	}
}
