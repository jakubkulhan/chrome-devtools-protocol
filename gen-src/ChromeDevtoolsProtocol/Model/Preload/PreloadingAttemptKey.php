<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * A key that identifies a preloading attempt. The url used is the url specified by the trigger (i.e. the initial URL), and not the final url that is navigated to. For example, prerendering allows same-origin main frame navigations during the attempt, but the attempt is still keyed with the initial URL.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PreloadingAttemptKey implements \JsonSerializable
{
	/** @var string */
	public $loaderId;

	/** @var string */
	public $action;

	/** @var string */
	public $url;

	/** @var string */
	public $targetHint;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		if (isset($data->action)) {
			$instance->action = (string)$data->action;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->targetHint)) {
			$instance->targetHint = (string)$data->targetHint;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		if ($this->action !== null) {
			$data->action = $this->action;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->targetHint !== null) {
			$data->targetHint = $this->targetHint;
		}
		return $data;
	}
}
