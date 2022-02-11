<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Request for LayerTree.replaySnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReplaySnapshotRequest implements \JsonSerializable
{
	/**
	 * The id of the layer snapshot.
	 *
	 * @var string
	 */
	public $snapshotId;

	/**
	 * The first step to replay from (replay from the very start if not specified).
	 *
	 * @var int|null
	 */
	public $fromStep;

	/**
	 * The last step to replay to (replay till the end if not specified).
	 *
	 * @var int|null
	 */
	public $toStep;

	/**
	 * The scale to apply while replaying (defaults to 1).
	 *
	 * @var int|float|null
	 */
	public $scale;


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
		if (isset($data->fromStep)) {
			$instance->fromStep = (int)$data->fromStep;
		}
		if (isset($data->toStep)) {
			$instance->toStep = (int)$data->toStep;
		}
		if (isset($data->scale)) {
			$instance->scale = $data->scale;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->snapshotId !== null) {
			$data->snapshotId = $this->snapshotId;
		}
		if ($this->fromStep !== null) {
			$data->fromStep = $this->fromStep;
		}
		if ($this->toStep !== null) {
			$data->toStep = $this->toStep;
		}
		if ($this->scale !== null) {
			$data->scale = $this->scale;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReplaySnapshotRequestBuilder
	 */
	public static function builder(): ReplaySnapshotRequestBuilder
	{
		return new ReplaySnapshotRequestBuilder();
	}
}
