<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPossibleBreakpointsRequestBuilder
{
	private $start;

	private $end;

	private $restrictToFunction;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetPossibleBreakpointsRequest
	{
		$instance = new GetPossibleBreakpointsRequest();
		if ($this->start === null) {
			throw new BuilderException('Property [start] is required.');
		}
		$instance->start = $this->start;
		$instance->end = $this->end;
		$instance->restrictToFunction = $this->restrictToFunction;
		return $instance;
	}


	/**
	 * @param Location $start
	 *
	 * @return self
	 */
	public function setStart($start): self
	{
		$this->start = $start;
		return $this;
	}


	/**
	 * @param Location|null $end
	 *
	 * @return self
	 */
	public function setEnd($end): self
	{
		$this->end = $end;
		return $this;
	}


	/**
	 * @param bool|null $restrictToFunction
	 *
	 * @return self
	 */
	public function setRestrictToFunction($restrictToFunction): self
	{
		$this->restrictToFunction = $restrictToFunction;
		return $this;
	}
}
