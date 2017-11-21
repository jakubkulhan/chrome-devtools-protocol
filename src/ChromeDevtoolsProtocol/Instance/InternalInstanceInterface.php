<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\ContextInterface;

/**
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface InternalInstanceInterface
{
	public function activateTabById(ContextInterface $ctx, string $id): void;

	public function closeTabById(ContextInterface $ctx, string $id): void;
}
