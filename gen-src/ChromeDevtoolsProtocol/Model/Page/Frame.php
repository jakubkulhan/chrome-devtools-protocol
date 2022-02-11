<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Information about the Frame on the page.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Frame implements \JsonSerializable
{
	/**
	 * Frame unique identifier.
	 *
	 * @var string
	 */
	public $id;

	/**
	 * Parent frame identifier.
	 *
	 * @var string
	 */
	public $parentId;

	/**
	 * Identifier of the loader associated with this frame.
	 *
	 * @var string
	 */
	public $loaderId;

	/**
	 * Frame's name as specified in the tag.
	 *
	 * @var string|null
	 */
	public $name;

	/**
	 * Frame document's URL without fragment.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Frame document's URL fragment including the '#'.
	 *
	 * @var string|null
	 */
	public $urlFragment;

	/**
	 * Frame document's registered domain, taking the public suffixes list into account. Extracted from the Frame's url. Example URLs: http://www.google.com/file.html -> "google.com" http://a.b.co.uk/file.html -> "b.co.uk"
	 *
	 * @var string
	 */
	public $domainAndRegistry;

	/**
	 * Frame document's security origin.
	 *
	 * @var string
	 */
	public $securityOrigin;

	/**
	 * Frame document's mimeType as determined by the browser.
	 *
	 * @var string
	 */
	public $mimeType;

	/**
	 * If the frame failed to load, this contains the URL that could not be loaded. Note that unlike url above, this URL may contain a fragment.
	 *
	 * @var string|null
	 */
	public $unreachableUrl;

	/**
	 * Indicates whether this frame was tagged as an ad and why.
	 *
	 * @var AdFrameStatus|null
	 */
	public $adFrameStatus;

	/**
	 * Indicates whether the main document is a secure context and explains why that is the case.
	 *
	 * @var string
	 */
	public $secureContextType;

	/**
	 * Indicates whether this is a cross origin isolated context.
	 *
	 * @var string
	 */
	public $crossOriginIsolatedContextType;

	/**
	 * Indicated which gated APIs / features are available.
	 *
	 * @var string[]
	 */
	public $gatedAPIFeatures;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->parentId)) {
			$instance->parentId = (string)$data->parentId;
		}
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->urlFragment)) {
			$instance->urlFragment = (string)$data->urlFragment;
		}
		if (isset($data->domainAndRegistry)) {
			$instance->domainAndRegistry = (string)$data->domainAndRegistry;
		}
		if (isset($data->securityOrigin)) {
			$instance->securityOrigin = (string)$data->securityOrigin;
		}
		if (isset($data->mimeType)) {
			$instance->mimeType = (string)$data->mimeType;
		}
		if (isset($data->unreachableUrl)) {
			$instance->unreachableUrl = (string)$data->unreachableUrl;
		}
		if (isset($data->adFrameStatus)) {
			$instance->adFrameStatus = AdFrameStatus::fromJson($data->adFrameStatus);
		}
		if (isset($data->secureContextType)) {
			$instance->secureContextType = (string)$data->secureContextType;
		}
		if (isset($data->crossOriginIsolatedContextType)) {
			$instance->crossOriginIsolatedContextType = (string)$data->crossOriginIsolatedContextType;
		}
		if (isset($data->gatedAPIFeatures)) {
			$instance->gatedAPIFeatures = [];
		if (isset($data->gatedAPIFeatures)) {
			$instance->gatedAPIFeatures = [];
			foreach ($data->gatedAPIFeatures as $item) {
				$instance->gatedAPIFeatures[] = (string)$item;
			}
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
		if ($this->parentId !== null) {
			$data->parentId = $this->parentId;
		}
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->urlFragment !== null) {
			$data->urlFragment = $this->urlFragment;
		}
		if ($this->domainAndRegistry !== null) {
			$data->domainAndRegistry = $this->domainAndRegistry;
		}
		if ($this->securityOrigin !== null) {
			$data->securityOrigin = $this->securityOrigin;
		}
		if ($this->mimeType !== null) {
			$data->mimeType = $this->mimeType;
		}
		if ($this->unreachableUrl !== null) {
			$data->unreachableUrl = $this->unreachableUrl;
		}
		if ($this->adFrameStatus !== null) {
			$data->adFrameStatus = $this->adFrameStatus->jsonSerialize();
		}
		if ($this->secureContextType !== null) {
			$data->secureContextType = $this->secureContextType;
		}
		if ($this->crossOriginIsolatedContextType !== null) {
			$data->crossOriginIsolatedContextType = $this->crossOriginIsolatedContextType;
		}
		if ($this->gatedAPIFeatures !== null) {
			$data->gatedAPIFeatures = [];
		if ($this->gatedAPIFeatures !== null) {
			$data->gatedAPIFeatures = [];
			foreach ($this->gatedAPIFeatures as $item) {
				$data->gatedAPIFeatures[] = $item;
			}
		}
		}
		return $data;
	}
}
