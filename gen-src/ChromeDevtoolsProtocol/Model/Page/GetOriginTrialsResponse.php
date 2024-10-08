<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getOriginTrials command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOriginTrialsResponse implements \JsonSerializable
{
	/** @var OriginTrial[] */
	public $originTrials;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->originTrials)) {
			$instance->originTrials = [];
			foreach ($data->originTrials as $item) {
				$instance->originTrials[] = OriginTrial::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->originTrials !== null) {
			$data->originTrials = [];
			foreach ($this->originTrials as $item) {
				$data->originTrials[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
