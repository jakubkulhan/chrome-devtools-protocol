<?php

namespace ChromeDevtoolsProtocol\Model\HeadlessExperimental;

/**
 * Issued when the target starts or stops needing BeginFrames.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NeedsBeginFramesChangedEvent implements \JsonSerializable
{
	/**
	 * True if BeginFrames are needed, false otherwise.
	 *
	 * @var bool
	 */
	public $needsBeginFrames;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->needsBeginFrames)) {
			$instance->needsBeginFrames = (bool)$data->needsBeginFrames;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->needsBeginFrames !== null) {
			$data->needsBeginFrames = $this->needsBeginFrames;
		}
		return $data;
	}
}
