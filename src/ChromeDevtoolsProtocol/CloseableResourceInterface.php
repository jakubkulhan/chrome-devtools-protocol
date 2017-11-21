<?php
namespace ChromeDevtoolsProtocol;

/**
 * Resource that must be explicitly closed before de-allocating.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface CloseableResourceInterface
{
	/**
	 * Release underlying resources.
	 */
	public function close(): void;
}
