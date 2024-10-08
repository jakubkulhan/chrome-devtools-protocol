<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

use ChromeDevtoolsProtocol\Model\Runtime\CallFrame;

/**
 * Profile node. Holds callsite information, execution statistics and child nodes.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ProfileNode implements \JsonSerializable
{
	/**
	 * Unique id of the node.
	 *
	 * @var int
	 */
	public $id;

	/**
	 * Function location.
	 *
	 * @var CallFrame
	 */
	public $callFrame;

	/**
	 * Number of samples where this node was on top of the call stack.
	 *
	 * @var int|null
	 */
	public $hitCount;

	/**
	 * Child node ids.
	 *
	 * @var int[]|null
	 */
	public $children;

	/**
	 * The reason of being not optimized. The function may be deoptimized or marked as don't optimize.
	 *
	 * @var string|null
	 */
	public $deoptReason;

	/**
	 * An array of source position ticks.
	 *
	 * @var PositionTickInfo[]|null
	 */
	public $positionTicks;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (int)$data->id;
		}
		if (isset($data->callFrame)) {
			$instance->callFrame = CallFrame::fromJson($data->callFrame);
		}
		if (isset($data->hitCount)) {
			$instance->hitCount = (int)$data->hitCount;
		}
		if (isset($data->children)) {
			$instance->children = [];
			foreach ($data->children as $item) {
				$instance->children[] = (int)$item;
			}
		}
		if (isset($data->deoptReason)) {
			$instance->deoptReason = (string)$data->deoptReason;
		}
		if (isset($data->positionTicks)) {
			$instance->positionTicks = [];
			foreach ($data->positionTicks as $item) {
				$instance->positionTicks[] = PositionTickInfo::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->callFrame !== null) {
			$data->callFrame = $this->callFrame->jsonSerialize();
		}
		if ($this->hitCount !== null) {
			$data->hitCount = $this->hitCount;
		}
		if ($this->children !== null) {
			$data->children = [];
			foreach ($this->children as $item) {
				$data->children[] = $item;
			}
		}
		if ($this->deoptReason !== null) {
			$data->deoptReason = $this->deoptReason;
		}
		if ($this->positionTicks !== null) {
			$data->positionTicks = [];
			foreach ($this->positionTicks as $item) {
				$data->positionTicks[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
