<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getSubApps command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSubAppsResponse implements \JsonSerializable
{
	/** @var SubApp[] */
	public $subApps;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->subApps)) {
			$instance->subApps = [];
			foreach ($data->subApps as $item) {
				$instance->subApps[] = SubApp::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->subApps !== null) {
			$data->subApps = [];
			foreach ($this->subApps as $item) {
				$data->subApps[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
