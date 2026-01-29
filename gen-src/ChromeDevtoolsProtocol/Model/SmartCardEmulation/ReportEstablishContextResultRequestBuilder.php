<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportEstablishContextResultRequestBuilder
{
	private $requestId;
	private $contextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReportEstablishContextResultRequest
	{
		$instance = new ReportEstablishContextResultRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->contextId === null) {
			throw new BuilderException('Property [contextId] is required.');
		}
		$instance->contextId = $this->contextId;
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
	 * @param int $contextId
	 *
	 * @return self
	 */
	public function setContextId($contextId): self
	{
		$this->contextId = $contextId;
		return $this;
	}
}
