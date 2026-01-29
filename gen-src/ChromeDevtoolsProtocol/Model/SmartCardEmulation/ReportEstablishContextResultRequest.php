<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Request for SmartCardEmulation.reportEstablishContextResult command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportEstablishContextResultRequest implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var int */
	public $contextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->contextId)) {
			$instance->contextId = (int)$data->contextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReportEstablishContextResultRequestBuilder
	 */
	public static function builder(): ReportEstablishContextResultRequestBuilder
	{
		return new ReportEstablishContextResultRequestBuilder();
	}
}
