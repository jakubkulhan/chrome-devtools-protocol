<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Request for LayerTree.profileSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ProfileSnapshotRequest implements \JsonSerializable
{
	/**
	 * The id of the layer snapshot.
	 *
	 * @var string
	 */
	public $snapshotId;

	/**
	 * The maximum number of times to replay the snapshot (1, if not specified).
	 *
	 * @var int|null
	 */
	public $minRepeatCount;

	/**
	 * The minimum duration (in seconds) to replay the snapshot.
	 *
	 * @var int|float|null
	 */
	public $minDuration;

	/**
	 * The clip rectangle to apply when replaying the snapshot.
	 *
	 * @var Rect|null
	 */
	public $clipRect;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->snapshotId)) {
			$instance->snapshotId = (string)$data->snapshotId;
		}
		if (isset($data->minRepeatCount)) {
			$instance->minRepeatCount = (int)$data->minRepeatCount;
		}
		if (isset($data->minDuration)) {
			$instance->minDuration = $data->minDuration;
		}
		if (isset($data->clipRect)) {
			$instance->clipRect = Rect::fromJson($data->clipRect);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->snapshotId !== null) {
			$data->snapshotId = $this->snapshotId;
		}
		if ($this->minRepeatCount !== null) {
			$data->minRepeatCount = $this->minRepeatCount;
		}
		if ($this->minDuration !== null) {
			$data->minDuration = $this->minDuration;
		}
		if ($this->clipRect !== null) {
			$data->clipRect = $this->clipRect->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ProfileSnapshotRequestBuilder
	 */
	public static function builder(): ProfileSnapshotRequestBuilder
	{
		return new ProfileSnapshotRequestBuilder();
	}
}
