<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\ContextInterface;

/**
 * Internal interface for raw tab manipulation.
 *
 * @internal
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface InternalInstanceInterface
{
	/**
	 * @internal
	 */
	public function activateTabById(ContextInterface $ctx, string $id): void;

	/**
	 * @internal
	 */
	public function closeTabById(ContextInterface $ctx, string $id): void;
}
