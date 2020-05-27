<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHighlightObjectForTestRequestBuilder
{
	private $nodeId;
	private $includeDistance;
	private $includeStyle;
	private $colorFormat;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetHighlightObjectForTestRequest
	{
		$instance = new GetHighlightObjectForTestRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		$instance->includeDistance = $this->includeDistance;
		$instance->includeStyle = $this->includeStyle;
		$instance->colorFormat = $this->colorFormat;
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
	 * @param bool|null $includeDistance
	 *
	 * @return self
	 */
	public function setIncludeDistance($includeDistance): self
	{
		$this->includeDistance = $includeDistance;
		return $this;
	}


	/**
	 * @param bool|null $includeStyle
	 *
	 * @return self
	 */
	public function setIncludeStyle($includeStyle): self
	{
		$this->includeStyle = $includeStyle;
		return $this;
	}


	/**
	 * @param string $colorFormat
	 *
	 * @return self
	 */
	public function setColorFormat($colorFormat): self
	{
		$this->colorFormat = $colorFormat;
		return $this;
	}
}
