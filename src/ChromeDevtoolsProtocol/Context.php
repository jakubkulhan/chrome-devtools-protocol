<?php
namespace ChromeDevtoolsProtocol;

/**
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class Context implements ContextInterface
{

	/** @var ContextInterface|null */
	private $parent;

	/** @var \DateTimeImmutable|null */
	private $deadline;

	public static function background()
	{
		return new Context();
	}

	public static function withDeadline(ContextInterface $parent, \DateTimeImmutable $deadline): ContextInterface
	{
		if ($parent->getDeadline() !== null &&
			floatval($parent->getDeadline()->format("U.u")) < floatval($deadline->format("U.u"))
		) {
			return $parent;
		}

		$ctx = new Context();
		$ctx->parent = $parent;
		$ctx->deadline = $deadline;

		return $ctx;
	}

	public static function withTimeout(ContextInterface $parent, int $seconds, int $microseconds = 0): ContextInterface
	{
		$deadlineTimestamp = microtime(true) + $seconds + ($microseconds / 1000000);
		return static::withDeadline($parent, \DateTimeImmutable::createFromFormat("U.u", $deadlineTimestamp));
	}

	public function getDeadline(): ?\DateTimeImmutable
	{
		return $this->deadline;
	}

}
