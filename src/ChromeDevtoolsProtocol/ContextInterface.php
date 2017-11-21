<?php
namespace ChromeDevtoolsProtocol;

/**
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface ContextInterface
{
	public function getDeadline(): ?\DateTimeImmutable;

	public function isAfterDeadline(): bool;

	public function deadlineFromNow(): ?float;
}
