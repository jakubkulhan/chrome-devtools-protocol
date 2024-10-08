<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.MixedContentIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MixedContentIssueDetails implements \JsonSerializable
{
	/**
	 * The type of resource causing the mixed content issue (css, js, iframe, form,...). Marked as optional because it is mapped to from blink::mojom::RequestContextType, which will be replaced by network::mojom::RequestDestination
	 *
	 * @var string
	 */
	public $resourceType;

	/**
	 * The way the mixed content issue is being resolved.
	 *
	 * @var string
	 */
	public $resolutionStatus;

	/**
	 * The unsafe http url causing the mixed content issue.
	 *
	 * @var string
	 */
	public $insecureURL;

	/**
	 * The url responsible for the call to an unsafe url.
	 *
	 * @var string
	 */
	public $mainResourceURL;

	/**
	 * The mixed content request. Does not always exist (e.g. for unsafe form submission urls).
	 *
	 * @var AffectedRequest|null
	 */
	public $request;

	/**
	 * Optional because not every mixed content issue is necessarily linked to a frame.
	 *
	 * @var AffectedFrame|null
	 */
	public $frame;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->resourceType)) {
			$instance->resourceType = (string)$data->resourceType;
		}
		if (isset($data->resolutionStatus)) {
			$instance->resolutionStatus = (string)$data->resolutionStatus;
		}
		if (isset($data->insecureURL)) {
			$instance->insecureURL = (string)$data->insecureURL;
		}
		if (isset($data->mainResourceURL)) {
			$instance->mainResourceURL = (string)$data->mainResourceURL;
		}
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		if (isset($data->frame)) {
			$instance->frame = AffectedFrame::fromJson($data->frame);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->resourceType !== null) {
			$data->resourceType = $this->resourceType;
		}
		if ($this->resolutionStatus !== null) {
			$data->resolutionStatus = $this->resolutionStatus;
		}
		if ($this->insecureURL !== null) {
			$data->insecureURL = $this->insecureURL;
		}
		if ($this->mainResourceURL !== null) {
			$data->mainResourceURL = $this->mainResourceURL;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		if ($this->frame !== null) {
			$data->frame = $this->frame->jsonSerialize();
		}
		return $data;
	}
}
