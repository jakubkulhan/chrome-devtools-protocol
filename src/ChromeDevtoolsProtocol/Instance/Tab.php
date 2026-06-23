<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\DevtoolsClient;
use ChromeDevtoolsProtocol\DevtoolsClientInterface;

/**
 * Opened tab in Chrome.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class Tab
{

	/** @var string */
	public $id;

	/** @var string */
	public $title;

	/** @var string|null */
	public $description;

	/** @var string */
	public $type;

	/** @var string */
	public $url;

	/** @var string|null */
	public $faviconUrl;

	/** @var string */
	public $webSocketDebuggerUrl;

	/** @var string */
	public $devtoolsFrontendUrl;

	/** @var InternalInstanceInterface */
	private $internalInstance;

	public function __construct($data, InternalInstanceInterface $internalInstance)
	{
		$this->id = $data->id;
		$this->title = $data->title;
		$this->description = $data->description ?? null;
		$this->type = $data->type;
		$this->url = $data->url;
		$this->faviconUrl = $data->faviconUrl ?? null;
		$this->webSocketDebuggerUrl = $data->webSocketDebuggerUrl;
		$this->devtoolsFrontendUrl = $data->devtoolsFrontendUrl;
		$this->internalInstance = $internalInstance;
	}

	/**
	 * Connect to devtools debugger.
	 *
	 * @return DevtoolsClientInterface
	 */
	public function devtools(): DevtoolsClientInterface
	{
		return DevtoolsClient::createFromDebuggerUrl($this->webSocketDebuggerUrl);
	}

	/**
	 * Activate this tab.
	 *
	 * @param ContextInterface $ctx
	 */
	public function activate(ContextInterface $ctx): void
	{
		$this->internalInstance->activateTabById($ctx, $this->id);
	}

	/**
	 * Close this tab.
	 *
	 * @param ContextInterface $ctx
	 */
	public function close(ContextInterface $ctx): void
	{
		$this->internalInstance->closeTabById($ctx, $this->id);
	}

}
