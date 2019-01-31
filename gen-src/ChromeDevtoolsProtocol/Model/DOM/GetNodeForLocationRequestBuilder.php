<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetNodeForLocationRequestBuilder
{
	private $x;

	private $y;

	private $includeUserAgentShadowDOM;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetNodeForLocationRequest
	{
		$instance = new GetNodeForLocationRequest();
		if ($this->x === null) {
			throw new BuilderException('Property [x] is required.');
		}
		$instance->x = $this->x;
		if ($this->y === null) {
			throw new BuilderException('Property [y] is required.');
		}
		$instance->y = $this->y;
		$instance->includeUserAgentShadowDOM = $this->includeUserAgentShadowDOM;
		return $instance;
	}


	/**
	 * @param int $x
	 *
	 * @return self
	 */
	public function setX($x): self
	{
		$this->x = $x;
		return $this;
	}


	/**
	 * @param int $y
	 *
	 * @return self
	 */
	public function setY($y): self
	{
		$this->y = $y;
		return $this;
	}


	/**
	 * @param bool|null $includeUserAgentShadowDOM
	 *
	 * @return self
	 */
	public function setIncludeUserAgentShadowDOM($includeUserAgentShadowDOM): self
	{
		$this->includeUserAgentShadowDOM = $includeUserAgentShadowDOM;
		return $this;
	}
}
