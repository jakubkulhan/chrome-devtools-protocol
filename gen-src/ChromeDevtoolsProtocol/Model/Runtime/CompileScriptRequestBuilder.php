<?php
namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CompileScriptRequestBuilder
{
	private $expression;

	private $sourceURL;

	private $persistScript;

	private $executionContextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CompileScriptRequest
	{
		$instance = new CompileScriptRequest();
		if ($this->expression === null) {
			throw new BuilderException('Property [expression] is required.');
		}
		$instance->expression = $this->expression;
		if ($this->sourceURL === null) {
			throw new BuilderException('Property [sourceURL] is required.');
		}
		$instance->sourceURL = $this->sourceURL;
		if ($this->persistScript === null) {
			throw new BuilderException('Property [persistScript] is required.');
		}
		$instance->persistScript = $this->persistScript;
		$instance->executionContextId = $this->executionContextId;
		return $instance;
	}


	/**
	 * @param string $expression
	 *
	 * @return self
	 */
	public function setExpression($expression): self
	{
		$this->expression = $expression;
		return $this;
	}


	/**
	 * @param string $sourceURL
	 *
	 * @return self
	 */
	public function setSourceURL($sourceURL): self
	{
		$this->sourceURL = $sourceURL;
		return $this;
	}


	/**
	 * @param bool $persistScript
	 *
	 * @return self
	 */
	public function setPersistScript($persistScript): self
	{
		$this->persistScript = $persistScript;
		return $this;
	}


	/**
	 * @param int $executionContextId
	 *
	 * @return self
	 */
	public function setExecutionContextId($executionContextId): self
	{
		$this->executionContextId = $executionContextId;
		return $this;
	}
}
