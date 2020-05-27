<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHistogramsRequestBuilder
{
	private $query;
	private $delta;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetHistogramsRequest
	{
		$instance = new GetHistogramsRequest();
		$instance->query = $this->query;
		$instance->delta = $this->delta;
		return $instance;
	}


	/**
	 * @param string|null $query
	 *
	 * @return self
	 */
	public function setQuery($query): self
	{
		$this->query = $query;
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
