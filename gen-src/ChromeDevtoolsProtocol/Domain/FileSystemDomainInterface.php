<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\FileSystem\GetDirectoryRequest;
use ChromeDevtoolsProtocol\Model\FileSystem\GetDirectoryResponse;

/**
 * FileSystem domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface FileSystemDomainInterface
{
	/**
	 * Call FileSystem.getDirectory command.
	 *
	 * @param ContextInterface $ctx
	 * @param GetDirectoryRequest $request
	 *
	 * @return GetDirectoryResponse
	 */
	public function getDirectory(ContextInterface $ctx, GetDirectoryRequest $request): GetDirectoryResponse;
}
