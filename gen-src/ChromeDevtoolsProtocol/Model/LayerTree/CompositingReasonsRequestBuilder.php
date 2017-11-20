<?php
namespace ChromeDevtoolsProtocol\Model\LayerTree;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CompositingReasonsRequestBuilder
{
	private $layerId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CompositingReasonsRequest
	{
		$instance = new CompositingReasonsRequest();
		if ($this->layerId === null) {
			throw new BuilderException('Property [layerId] is required.');
		}
		$instance->layerId = $this->layerId;
		return $instance;
	}


	/**
	 * @param string $layerId
	 *
	 * @return self
	 */
	public function setLayerId($layerId): self
	{
		$this->layerId = $layerId;
		return $this;
	}
}
