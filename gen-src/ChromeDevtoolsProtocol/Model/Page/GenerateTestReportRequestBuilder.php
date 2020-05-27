<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GenerateTestReportRequestBuilder
{
	private $message;
	private $group;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GenerateTestReportRequest
	{
		$instance = new GenerateTestReportRequest();
		if ($this->message === null) {
			throw new BuilderException('Property [message] is required.');
		}
		$instance->message = $this->message;
		$instance->group = $this->group;
		return $instance;
	}


	/**
	 * @param string $message
	 *
	 * @return self
	 */
	public function setMessage($message): self
	{
		$this->message = $message;
		return $this;
	}


	/**
	 * @param string|null $group
	 *
	 * @return self
	 */
	public function setGroup($group): self
	{
		$this->group = $group;
		return $this;
	}
}
