<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue warns about uses of APIs that may be considered misuse to re-identify users.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UserReidentificationIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $type;

	/**
	 * Applies to BlockedFrameNavigation and BlockedSubresource issue types.
	 *
	 * @var AffectedRequest|null
	 */
	public $request;

	/**
	 * Applies to NoisedCanvasReadback issue type.
	 *
	 * @var SourceCodeLocation|null
	 */
	public $sourceCodeLocation;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		if (isset($data->sourceCodeLocation)) {
			$instance->sourceCodeLocation = SourceCodeLocation::fromJson($data->sourceCodeLocation);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		if ($this->sourceCodeLocation !== null) {
			$data->sourceCodeLocation = $this->sourceCodeLocation->jsonSerialize();
		}
		return $data;
	}
}
