<?php
namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetOuterHTMLRequestBuilder
{
	private $nodeId;

	private $outerHTML;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetOuterHTMLRequest
	{
		$instance = new SetOuterHTMLRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->outerHTML === null) {
			throw new BuilderException('Property [outerHTML] is required.');
		}
		$instance->outerHTML = $this->outerHTML;
		return $instance;
	}


	/**
	 * @param int $nodeId
	 *
	 * @return self
	 */
	public function setNodeId($nodeId): self
	{
		$this->nodeId = $nodeId;
		return $this;
	}


	/**
	 * @param string $outerHTML
	 *
	 * @return self
	 */
	public function setOuterHTML($outerHTML): self
	{
		$this->outerHTML = $outerHTML;
		return $this;
	}
}
