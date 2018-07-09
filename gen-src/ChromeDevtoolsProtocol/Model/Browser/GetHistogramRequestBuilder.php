<?php
namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHistogramRequestBuilder
{
	private $name;

	private $delta;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetHistogramRequest
	{
		$instance = new GetHistogramRequest();
		if ($this->name === null) {
			throw new BuilderException('Property [name] is required.');
		}
		$instance->name = $this->name;
		$instance->delta = $this->delta;
		return $instance;
	}


	/**
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName($name): self
	{
		$this->name = $name;
		return $this;
	}


	/**
	 * @param bool|null $delta
	 *
	 * @return self
	 */
	public function setDelta($delta): self
	{
		$this->delta = $delta;
		return $this;
	}
}
