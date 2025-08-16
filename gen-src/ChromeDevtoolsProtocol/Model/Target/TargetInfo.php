<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Named type Target.TargetInfo.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TargetInfo implements \JsonSerializable
{
	/** @var string */
	public $targetId;

	/**
	 * List of types: https://source.chromium.org/chromium/chromium/src/+/main:content/browser/devtools/devtools_agent_host_impl.cc?ss=chromium&q=f:devtools%20-f:out%20%22::kTypeTab%5B%5D%22
	 *
	 * @var string
	 */
	public $type;

	/** @var string */
	public $title;

	/** @var string */
	public $url;

	/**
	 * Whether the target has an attached client.
	 *
	 * @var bool
	 */
	public $attached;

	/**
	 * Opener target Id
	 *
	 * @var string
	 */
	public $openerId;

	/**
	 * Whether the target has access to the originating window.
	 *
	 * @var bool
	 */
	public $canAccessOpener;

	/**
	 * Frame id of originating window (is only set if target has an opener).
	 *
	 * @var string
	 */
	public $openerFrameId;

	/**
	 * Id of the parent frame, only present for the "iframe" targets.
	 *
	 * @var string
	 */
	public $parentFrameId;

	/** @var string */
	public $browserContextId;

	/**
	 * Provides additional details for specific target types. For example, for the type of "page", this may be set to "prerender".
	 *
	 * @var string|null
	 */
	public $subtype;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->title)) {
			$instance->title = (string)$data->title;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->attached)) {
			$instance->attached = (bool)$data->attached;
		}
		if (isset($data->openerId)) {
			$instance->openerId = (string)$data->openerId;
		}
		if (isset($data->canAccessOpener)) {
			$instance->canAccessOpener = (bool)$data->canAccessOpener;
		}
		if (isset($data->openerFrameId)) {
			$instance->openerFrameId = (string)$data->openerFrameId;
		}
		if (isset($data->parentFrameId)) {
			$instance->parentFrameId = (string)$data->parentFrameId;
		}
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
		}
		if (isset($data->subtype)) {
			$instance->subtype = (string)$data->subtype;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->attached !== null) {
			$data->attached = $this->attached;
		}
		if ($this->openerId !== null) {
			$data->openerId = $this->openerId;
		}
		if ($this->canAccessOpener !== null) {
			$data->canAccessOpener = $this->canAccessOpener;
		}
		if ($this->openerFrameId !== null) {
			$data->openerFrameId = $this->openerFrameId;
		}
		if ($this->parentFrameId !== null) {
			$data->parentFrameId = $this->parentFrameId;
		}
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		if ($this->subtype !== null) {
			$data->subtype = $this->subtype;
		}
		return $data;
	}
}
