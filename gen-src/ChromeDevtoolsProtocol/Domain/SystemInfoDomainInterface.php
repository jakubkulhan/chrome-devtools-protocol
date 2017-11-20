<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetInfoResponse;

/**
 * The SystemInfo domain defines methods and events for querying low-level system information.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface SystemInfoDomainInterface
{
	/**
	 * Returns information about the system.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetInfoResponse
	 */
	public function getInfo(ContextInterface $ctx): GetInfoResponse;
}
