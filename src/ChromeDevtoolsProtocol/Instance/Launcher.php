<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Exception\LogicException;
use ChromeDevtoolsProtocol\Exception\RuntimeException;
use GuzzleHttp\Exception\ConnectException;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\ExecutableFinder;
use Symfony\Component\Process\Process;

/**
 * Launcher starts new Chrome process.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class Launcher
{

    const DEFAULT_LINUX_EXECUTABLE = "google-chrome";

    public static $defaultArgs = [
        "--headless",
    ];

    /** @var int */
    private $port;

    /** @var string|null */
    private $workDir;

    /** @var array|null */
    private $env;

    /** @var mixed */
    private $input;

    /**
     * @param int $port If port <= 0, random port number is generated.
     * @throws \Exception
     */
    public function __construct($port = 0)
    {
        if ($port <= 0) {
            $port = random_int(1024 + 1, 65535);
        }

        $this->port = $port;
    }

    /**
     * Set remote debugging port.
     *
     * @param int $port
     * @return self
     */
    public function setPort(int $port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * Working directory where process will be launched.
     *
     * @param string|null $workDir
     * @return self
     */
    public function setWorkDir(?string $workDir)
    {
        $this->workDir = $workDir;
        return $this;
    }

    /**
     * Environment variables of launched process.
     *
     * @param array|null $env If `null`, Chrome process will inherit current process environment variables.
     * @return self
     */
    public function setEnv(?array $env)
    {
        $this->env = $env;
        return $this;
    }

    /**
     * Input will be passed to `stdin` of launched process.
     *
     * @param mixed $input
     * @return self
     */
    public function setInput($input)
    {
        $this->input = $input;
        return $this;
    }

    /**
     * Start new Chrome process.
     *
     * @param ContextInterface $ctx
     * @param array ...$args
     * @return ProcessInstance
     * @throws \Exception
     */
    public function launch(ContextInterface $ctx, ...$args): ProcessInstance
    {
        if (PHP_OS === "Linux") {
            $finder = new ExecutableFinder();
            $executable = $finder->find(static::DEFAULT_LINUX_EXECUTABLE);
            if ($executable === null) {
                throw new RuntimeException(sprintf("Executable [%s] not found.", static::DEFAULT_LINUX_EXECUTABLE));
            }

        } else if (PHP_OS === "Darwin") {
            $candidateExecutables = [
                // Chrome Canary
                "/Applications/Google Chrome Canary.app/Contents/MacOS/Google Chrome Canary",
                // Chrome Stable
                "/Applications/Google Chrome.app/Contents/MacOS/Google Chrome",
            ];

            $executable = null;
            foreach ($candidateExecutables as $candidateExecutable) {
                if (is_executable($candidateExecutable)) {
                    $executable = $candidateExecutable;
                    break;
                }
            }

            if ($executable === null) {
                throw new RuntimeException(sprintf("No OS X executable found."));
            }

        } else {
            throw new LogicException(sprintf("Operating system [%s] not supported.", PHP_OS));
        }

        return $this->launchWithExecutable($ctx, $executable, ...$args);
    }

    /**
     * @param ContextInterface $ctx
     * @param string $executable
     * @param array ...$args
     * @return ProcessInstance
     * @throws \Exception
     */
    protected function launchWithExecutable(ContextInterface $ctx, string $executable, ...$args): ProcessInstance
    {
        $args = array_unique(array_merge(static::$defaultArgs, $args));

        $foundPort = false;
        foreach ($args as $arg) {
            if (strncmp($arg, "--remote-debugging-port=", 24 /* strlen("--remote-debugging-port=") */) === 0) {
                $foundPort = true;
                break;
            }
        }

        if (!$foundPort) {
            $args[] = "--remote-debugging-port=" . $this->port;
        }

        $foundUserDataDir = false;
        foreach ($args as $arg) {
            if (strncmp($arg, "--user-data-dir=", 16 /* strlen("--user-data-dir=") */) === 0) {
                $foundUserDataDir = true;
                break;
            }
        }

        $fs = new Filesystem();
        $temporaryUserDataDir = null;
        if (!$foundUserDataDir) {
            $temporaryUserDataDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . "chrome-profile-" . $this->port;
            $fs->mkdir($temporaryUserDataDir);
            $args[] = "--user-data-dir=" . $temporaryUserDataDir;
        }

        try {
            $process = new Process(
                array_merge([$executable], $args),
                $this->workDir,
                $this->env,
                $this->input,
                null
            );
            $process->start();

            $instance = new ProcessInstance($process, $temporaryUserDataDir, $this->port);

            for (; ;) {
                try {
                    $instance->version($ctx);
                    return $instance;
                } catch (ConnectException $e) {
                    if ($ctx->isAfterDeadline()) {
                        $instance->close();
                        throw $e;
                    }
                    usleep(10);
                    continue;
                }
            }

        } catch (\Exception $e) {
            if ($temporaryUserDataDir !== null) {
                $fs->remove($temporaryUserDataDir);
            }

            throw $e;
        }
    }

}
