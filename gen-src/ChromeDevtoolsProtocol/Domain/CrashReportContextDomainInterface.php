<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\CrashReportContext\GetEntriesResponse;

/**
 * This domain exposes the current state of the CrashReportContext API.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface CrashReportContextDomainInterface
{
	/**
	 * Returns all entries in the CrashReportContext across all frames in the page.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetEntriesResponse
	 */
	public function getEntries(ContextInterface $ctx): GetEntriesResponse;
}
