<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Schema\GetDomainsResponse;

/**
 * This domain is deprecated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface SchemaDomainInterface
{
	/**
	 * Returns supported domains.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetDomainsResponse
	 */
	public function getDomains(ContextInterface $ctx): GetDomainsResponse;
}
