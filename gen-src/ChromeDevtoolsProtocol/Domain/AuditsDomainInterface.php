<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Audits\GetEncodedResponseRequest;
use ChromeDevtoolsProtocol\Model\Audits\GetEncodedResponseResponse;

/**
 * Audits domain allows investigation of page violations and possible improvements.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface AuditsDomainInterface
{
	/**
	 * Returns the response body and size if it were re-encoded with the specified settings. Only applies to images.
	 *
	 * @param ContextInterface $ctx
	 * @param GetEncodedResponseRequest $request
	 *
	 * @return GetEncodedResponseResponse
	 */
	public function getEncodedResponse(ContextInterface $ctx, GetEncodedResponseRequest $request): GetEncodedResponseResponse;
}
