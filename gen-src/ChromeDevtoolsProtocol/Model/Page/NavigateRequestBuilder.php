<?php
namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NavigateRequestBuilder
{
	private $url;

	private $referrer;

	private $transitionType;

	private $frameId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): NavigateRequest
	{
		$instance = new NavigateRequest();
		if ($this->url === null) {
			throw new BuilderException('Property [url] is required.');
		}
		$instance->url = $this->url;
		$instance->referrer = $this->referrer;
		$instance->transitionType = $this->transitionType;
		$instance->frameId = $this->frameId;
		return $instance;
	}


	/**
	 * @param string $url
	 *
	 * @return self
	 */
	public function setUrl($url): self
	{
		$this->url = $url;
		return $this;
	}


	/**
	 * @param string|null $referrer
	 *
	 * @return self
	 */
	public function setReferrer($referrer): self
	{
		$this->referrer = $referrer;
		return $this;
	}


	/**
	 * @param string $transitionType
	 *
	 * @return self
	 */
	public function setTransitionType($transitionType): self
	{
		$this->transitionType = $transitionType;
		return $this;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}
}
