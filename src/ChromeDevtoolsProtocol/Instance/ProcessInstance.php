<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\CloseableResourceInterface;
use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Exception\LogicException;
use ChromeDevtoolsProtocol\Model\Instance\Version;
use ChromeDevtoolsProtocol\Session;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

/**
 * Chrome instance that also manages underlying Chrome process.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class ProcessInstance implements InstanceInterface, CloseableResourceInterface
{

	/** @var Process|null */
	private $process;

	/** @var string|null */
	private $temporaryUserDataDir;

	/** @var InstanceInterface */
	private $wrappedInstance;

	public function __construct(Process $process, ?string $temporaryUserDataDir, int $port)
	{
		$this->process = $process;
		$this->temporaryUserDataDir = $temporaryUserDataDir;
		$this->wrappedInstance = new Instance("localhost", $port);
	}

	public function __destruct()
	{
		if ($this->process !== null && $this->process->isRunning()) {
			throw new LogicException(sprintf(
				"You must call [%s::%s] method to release underlying process.",
				__CLASS__,
				"close"
			));
		}
	}

	public function close(): void
	{
		$this->process->stop();
		$this->process = null;

		if ($this->temporaryUserDataDir !== null) {
			(new Filesystem())->remove($this->temporaryUserDataDir);
		}
	}

	/**
	 * {@inheritdoc}
	 *
	 * @return Tab[]
	 */
	public function tabs(ContextInterface $ctx): array
	{
		return $this->wrappedInstance->tabs($ctx);
	}

	/**
	 * {@inheritdoc}
	 */
	public function open(ContextInterface $ctx, string $url = null): Tab
	{
		return $this->wrappedInstance->open($ctx, $url);
	}

	/**
	 * {@inheritdoc}
	 */
	public function version(ContextInterface $ctx): Version
	{
		return $this->wrappedInstance->version($ctx);
	}

	/**
	 * {@inheritdoc}
	 */
	public function createSession(ContextInterface $ctx, string $url = "about:blank"): Session
	{
		return $this->wrappedInstance->createSession($ctx, $url);
	}

}
