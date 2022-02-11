<?php

namespace ChromeDevtoolsProtocol\Model\Performance;

/**
 * Request for Performance.setTimeDomain command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTimeDomainRequest implements \JsonSerializable
{
	/**
	 * Time domain
	 *
	 * @var string
	 */
	public $timeDomain;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->timeDomain)) {
			$instance->timeDomain = (string)$data->timeDomain;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->timeDomain !== null) {
			$data->timeDomain = $this->timeDomain;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetTimeDomainRequestBuilder
	 */
	public static function builder(): SetTimeDomainRequestBuilder
	{
		return new SetTimeDomainRequestBuilder();
	}
}
