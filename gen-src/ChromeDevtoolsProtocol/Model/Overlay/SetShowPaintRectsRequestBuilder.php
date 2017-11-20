<?php
namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowPaintRectsRequestBuilder
{
	private $result;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowPaintRectsRequest
	{
		$instance = new SetShowPaintRectsRequest();
		if ($this->result === null) {
			throw new BuilderException('Property [result] is required.');
		}
		$instance->result = $this->result;
		return $instance;
	}


	/**
	 * @param bool $result
	 *
	 * @return self
	 */
	public function setResult($result): self
	{
		$this->result = $result;
		return $this;
	}
}
