<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.WebAppManifest.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebAppManifest implements \JsonSerializable
{
	/** @var string|null */
	public $backgroundColor;

	/**
	 * The extra description provided by the manifest.
	 *
	 * @var string|null
	 */
	public $description;

	/** @var string|null */
	public $dir;

	/** @var string|null */
	public $display;

	/**
	 * The overrided display mode controlled by the user.
	 *
	 * @var string[]|null
	 */
	public $displayOverrides;

	/**
	 * The handlers to open files.
	 *
	 * @var FileHandler[]|null
	 */
	public $fileHandlers;

	/** @var ImageResource[]|null */
	public $icons;

	/** @var string|null */
	public $id;

	/** @var string|null */
	public $lang;

	/**
	 * TODO(crbug.com/1231886): This field is non-standard and part of a Chrome experiment. See: https://github.com/WICG/web-app-launch/blob/main/launch_handler.md
	 *
	 * @var LaunchHandler|null
	 */
	public $launchHandler;

	/** @var string|null */
	public $name;

	/** @var string|null */
	public $orientation;

	/** @var bool|null */
	public $preferRelatedApplications;

	/**
	 * The handlers to open protocols.
	 *
	 * @var ProtocolHandler[]|null
	 */
	public $protocolHandlers;

	/** @var RelatedApplication[]|null */
	public $relatedApplications;

	/** @var string|null */
	public $scope;

	/**
	 * Non-standard, see https://github.com/WICG/manifest-incubations/blob/gh-pages/scope_extensions-explainer.md
	 *
	 * @var ScopeExtension[]|null
	 */
	public $scopeExtensions;

	/**
	 * The screenshots used by chromium.
	 *
	 * @var Screenshot[]|null
	 */
	public $screenshots;

	/** @var ShareTarget|null */
	public $shareTarget;

	/** @var string|null */
	public $shortName;

	/** @var Shortcut[]|null */
	public $shortcuts;

	/** @var string|null */
	public $startUrl;

	/** @var string|null */
	public $themeColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->backgroundColor)) {
			$instance->backgroundColor = (string)$data->backgroundColor;
		}
		if (isset($data->description)) {
			$instance->description = (string)$data->description;
		}
		if (isset($data->dir)) {
			$instance->dir = (string)$data->dir;
		}
		if (isset($data->display)) {
			$instance->display = (string)$data->display;
		}
		if (isset($data->displayOverrides)) {
			$instance->displayOverrides = [];
			foreach ($data->displayOverrides as $item) {
				$instance->displayOverrides[] = (string)$item;
			}
		}
		if (isset($data->fileHandlers)) {
			$instance->fileHandlers = [];
			foreach ($data->fileHandlers as $item) {
				$instance->fileHandlers[] = FileHandler::fromJson($item);
			}
		}
		if (isset($data->icons)) {
			$instance->icons = [];
			foreach ($data->icons as $item) {
				$instance->icons[] = ImageResource::fromJson($item);
			}
		}
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->lang)) {
			$instance->lang = (string)$data->lang;
		}
		if (isset($data->launchHandler)) {
			$instance->launchHandler = LaunchHandler::fromJson($data->launchHandler);
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->orientation)) {
			$instance->orientation = (string)$data->orientation;
		}
		if (isset($data->preferRelatedApplications)) {
			$instance->preferRelatedApplications = (bool)$data->preferRelatedApplications;
		}
		if (isset($data->protocolHandlers)) {
			$instance->protocolHandlers = [];
			foreach ($data->protocolHandlers as $item) {
				$instance->protocolHandlers[] = ProtocolHandler::fromJson($item);
			}
		}
		if (isset($data->relatedApplications)) {
			$instance->relatedApplications = [];
			foreach ($data->relatedApplications as $item) {
				$instance->relatedApplications[] = RelatedApplication::fromJson($item);
			}
		}
		if (isset($data->scope)) {
			$instance->scope = (string)$data->scope;
		}
		if (isset($data->scopeExtensions)) {
			$instance->scopeExtensions = [];
			foreach ($data->scopeExtensions as $item) {
				$instance->scopeExtensions[] = ScopeExtension::fromJson($item);
			}
		}
		if (isset($data->screenshots)) {
			$instance->screenshots = [];
			foreach ($data->screenshots as $item) {
				$instance->screenshots[] = Screenshot::fromJson($item);
			}
		}
		if (isset($data->shareTarget)) {
			$instance->shareTarget = ShareTarget::fromJson($data->shareTarget);
		}
		if (isset($data->shortName)) {
			$instance->shortName = (string)$data->shortName;
		}
		if (isset($data->shortcuts)) {
			$instance->shortcuts = [];
			foreach ($data->shortcuts as $item) {
				$instance->shortcuts[] = Shortcut::fromJson($item);
			}
		}
		if (isset($data->startUrl)) {
			$instance->startUrl = (string)$data->startUrl;
		}
		if (isset($data->themeColor)) {
			$instance->themeColor = (string)$data->themeColor;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->backgroundColor !== null) {
			$data->backgroundColor = $this->backgroundColor;
		}
		if ($this->description !== null) {
			$data->description = $this->description;
		}
		if ($this->dir !== null) {
			$data->dir = $this->dir;
		}
		if ($this->display !== null) {
			$data->display = $this->display;
		}
		if ($this->displayOverrides !== null) {
			$data->displayOverrides = [];
			foreach ($this->displayOverrides as $item) {
				$data->displayOverrides[] = $item;
			}
		}
		if ($this->fileHandlers !== null) {
			$data->fileHandlers = [];
			foreach ($this->fileHandlers as $item) {
				$data->fileHandlers[] = $item->jsonSerialize();
			}
		}
		if ($this->icons !== null) {
			$data->icons = [];
			foreach ($this->icons as $item) {
				$data->icons[] = $item->jsonSerialize();
			}
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->lang !== null) {
			$data->lang = $this->lang;
		}
		if ($this->launchHandler !== null) {
			$data->launchHandler = $this->launchHandler->jsonSerialize();
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->orientation !== null) {
			$data->orientation = $this->orientation;
		}
		if ($this->preferRelatedApplications !== null) {
			$data->preferRelatedApplications = $this->preferRelatedApplications;
		}
		if ($this->protocolHandlers !== null) {
			$data->protocolHandlers = [];
			foreach ($this->protocolHandlers as $item) {
				$data->protocolHandlers[] = $item->jsonSerialize();
			}
		}
		if ($this->relatedApplications !== null) {
			$data->relatedApplications = [];
			foreach ($this->relatedApplications as $item) {
				$data->relatedApplications[] = $item->jsonSerialize();
			}
		}
		if ($this->scope !== null) {
			$data->scope = $this->scope;
		}
		if ($this->scopeExtensions !== null) {
			$data->scopeExtensions = [];
			foreach ($this->scopeExtensions as $item) {
				$data->scopeExtensions[] = $item->jsonSerialize();
			}
		}
		if ($this->screenshots !== null) {
			$data->screenshots = [];
			foreach ($this->screenshots as $item) {
				$data->screenshots[] = $item->jsonSerialize();
			}
		}
		if ($this->shareTarget !== null) {
			$data->shareTarget = $this->shareTarget->jsonSerialize();
		}
		if ($this->shortName !== null) {
			$data->shortName = $this->shortName;
		}
		if ($this->shortcuts !== null) {
			$data->shortcuts = [];
			foreach ($this->shortcuts as $item) {
				$data->shortcuts[] = $item->jsonSerialize();
			}
		}
		if ($this->startUrl !== null) {
			$data->startUrl = $this->startUrl;
		}
		if ($this->themeColor !== null) {
			$data->themeColor = $this->themeColor;
		}
		return $data;
	}
}
