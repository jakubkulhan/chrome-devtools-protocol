<?php
namespace ChromeDevtoolsProtocol\Model\Audits;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetEncodedResponseRequestBuilder
{
	private $requestId;

	private $encoding;

	private $quality;

	private $sizeOnly;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetEncodedResponseRequest
	{
		$instance = new GetEncodedResponseRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->encoding === null) {
			throw new BuilderException('Property [encoding] is required.');
		}
		$instance->encoding = $this->encoding;
		$instance->quality = $this->quality;
		$instance->sizeOnly = $this->sizeOnly;
		return $instance;
	}


	/**
	 * @param string $requestId
	 *
	 * @return self
	 */
	public function setRequestId($requestId): self
	{
		$this->requestId = $requestId;
		return $this;
	}


	/**
	 * @param string $encoding
	 *
	 * @return self
	 */
	public function setEncoding($encoding): self
	{
		$this->encoding = $encoding;
		return $this;
	}


	/**
	 * @param int|float|null $quality
	 *
	 * @return self
	 */
	public function setQuality($quality): self
	{
		$this->quality = $quality;
		return $this;
	}


	/**
	 * @param bool|null $sizeOnly
	 *
	 * @return self
	 */
	public function setSizeOnly($sizeOnly): self
	{
		$this->sizeOnly = $sizeOnly;
		return $this;
	}
}
