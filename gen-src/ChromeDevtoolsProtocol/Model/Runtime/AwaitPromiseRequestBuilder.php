<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AwaitPromiseRequestBuilder
{
	private $promiseObjectId;

	private $returnByValue;

	private $generatePreview;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AwaitPromiseRequest
	{
		$instance = new AwaitPromiseRequest();
		if ($this->promiseObjectId === null) {
			throw new BuilderException('Property [promiseObjectId] is required.');
		}
		$instance->promiseObjectId = $this->promiseObjectId;
		$instance->returnByValue = $this->returnByValue;
		$instance->generatePreview = $this->generatePreview;
		return $instance;
	}


	/**
	 * @param string $promiseObjectId
	 *
	 * @return self
	 */
	public function setPromiseObjectId($promiseObjectId): self
	{
		$this->promiseObjectId = $promiseObjectId;
		return $this;
	}


	/**
	 * @param bool|null $returnByValue
	 *
	 * @return self
	 */
	public function setReturnByValue($returnByValue): self
	{
		$this->returnByValue = $returnByValue;
		return $this;
	}


	/**
	 * @param bool|null $generatePreview
	 *
	 * @return self
	 */
	public function setGeneratePreview($generatePreview): self
	{
		$this->generatePreview = $generatePreview;
		return $this;
	}
}
