<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Testing\GenerateTestReportRequest;

/**
 * Testing domain is a dumping ground for the capabilities requires for browser or app testing that do not fit other domains.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface TestingDomainInterface
{
	/**
	 * Generates a report for testing.
	 *
	 * @param ContextInterface $ctx
	 * @param GenerateTestReportRequest $request
	 *
	 * @return void
	 */
	public function generateTestReport(ContextInterface $ctx, GenerateTestReportRequest $request): void;
}
