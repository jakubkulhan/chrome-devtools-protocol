<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EmulateNetworkConditionsRequestBuilder
{
	private $offline;

	private $latency;

	private $downloadThroughput;

	private $uploadThroughput;

	private $connectionType;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EmulateNetworkConditionsRequest
	{
		$instance = new EmulateNetworkConditionsRequest();
		if ($this->offline === null) {
			throw new BuilderException('Property [offline] is required.');
		}
		$instance->offline = $this->offline;
		if ($this->latency === null) {
			throw new BuilderException('Property [latency] is required.');
		}
		$instance->latency = $this->latency;
		if ($this->downloadThroughput === null) {
			throw new BuilderException('Property [downloadThroughput] is required.');
		}
		$instance->downloadThroughput = $this->downloadThroughput;
		if ($this->uploadThroughput === null) {
			throw new BuilderException('Property [uploadThroughput] is required.');
		}
		$instance->uploadThroughput = $this->uploadThroughput;
		$instance->connectionType = $this->connectionType;
		return $instance;
	}


	/**
	 * @param bool $offline
	 *
	 * @return self
	 */
	public function setOffline($offline): self
	{
		$this->offline = $offline;
		return $this;
	}


	/**
	 * @param int|float $latency
	 *
	 * @return self
	 */
	public function setLatency($latency): self
	{
		$this->latency = $latency;
		return $this;
	}


	/**
	 * @param int|float $downloadThroughput
	 *
	 * @return self
	 */
	public function setDownloadThroughput($downloadThroughput): self
	{
		$this->downloadThroughput = $downloadThroughput;
		return $this;
	}


	/**
	 * @param int|float $uploadThroughput
	 *
	 * @return self
	 */
	public function setUploadThroughput($uploadThroughput): self
	{
		$this->uploadThroughput = $uploadThroughput;
		return $this;
	}


	/**
	 * @param string $connectionType
	 *
	 * @return self
	 */
	public function setConnectionType($connectionType): self
	{
		$this->connectionType = $connectionType;
		return $this;
	}
}
