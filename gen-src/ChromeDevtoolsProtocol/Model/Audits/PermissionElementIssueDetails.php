<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue warns about improper usage of the <permission> element.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PermissionElementIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $issueType;

	/**
	 * The value of the type attribute.
	 *
	 * @var string|null
	 */
	public $type;

	/**
	 * The node ID of the <permission> element.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * True if the issue is a warning, false if it is an error.
	 *
	 * @var bool|null
	 */
	public $isWarning;

	/**
	 * Fields for message construction: Used for messages that reference a specific permission name
	 *
	 * @var string|null
	 */
	public $permissionName;

	/**
	 * Used for messages about occlusion
	 *
	 * @var string|null
	 */
	public $occluderNodeInfo;

	/**
	 * Used for messages about occluder's parent
	 *
	 * @var string|null
	 */
	public $occluderParentNodeInfo;

	/**
	 * Used for messages about activation disabled reason
	 *
	 * @var string|null
	 */
	public $disableReason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->issueType)) {
			$instance->issueType = (string)$data->issueType;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->isWarning)) {
			$instance->isWarning = (bool)$data->isWarning;
		}
		if (isset($data->permissionName)) {
			$instance->permissionName = (string)$data->permissionName;
		}
		if (isset($data->occluderNodeInfo)) {
			$instance->occluderNodeInfo = (string)$data->occluderNodeInfo;
		}
		if (isset($data->occluderParentNodeInfo)) {
			$instance->occluderParentNodeInfo = (string)$data->occluderParentNodeInfo;
		}
		if (isset($data->disableReason)) {
			$instance->disableReason = (string)$data->disableReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->issueType !== null) {
			$data->issueType = $this->issueType;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->isWarning !== null) {
			$data->isWarning = $this->isWarning;
		}
		if ($this->permissionName !== null) {
			$data->permissionName = $this->permissionName;
		}
		if ($this->occluderNodeInfo !== null) {
			$data->occluderNodeInfo = $this->occluderNodeInfo;
		}
		if ($this->occluderParentNodeInfo !== null) {
			$data->occluderParentNodeInfo = $this->occluderParentNodeInfo;
		}
		if ($this->disableReason !== null) {
			$data->disableReason = $this->disableReason;
		}
		return $data;
	}
}
