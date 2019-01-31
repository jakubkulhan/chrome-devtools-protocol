<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttributesAsTextRequestBuilder
{
	private $nodeId;

	private $text;

	private $name;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAttributesAsTextRequest
	{
		$instance = new SetAttributesAsTextRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->text === null) {
			throw new BuilderException('Property [text] is required.');
		}
		$instance->text = $this->text;
		$instance->name = $this->name;
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
	 * @param string $text
	 *
	 * @return self
	 */
	public function setText($text): self
	{
		$this->text = $text;
		return $this;
	}


	/**
	 * @param string|null $name
	 *
	 * @return self
	 */
	public function setName($name): self
	{
		$this->name = $name;
		return $this;
	}
}
