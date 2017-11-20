<?php
namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.navigate command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NavigateRequest implements \JsonSerializable
{
	/**
	 * URL to navigate the page to.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Referrer URL.
	 *
	 * @var string|null
	 */
	public $referrer;

	/**
	 * Intended transition type.
	 *
	 * @var string
	 */
	public $transitionType;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->referrer)) {
			$instance->referrer = (string)$data->referrer;
		}
		if (isset($data->transitionType)) {
			$instance->transitionType = (string)$data->transitionType;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->referrer !== null) {
			$data->referrer = $this->referrer;
		}
		if ($this->transitionType !== null) {
			$data->transitionType = $this->transitionType;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return NavigateRequestBuilder
	 */
	public static function builder(): NavigateRequestBuilder
	{
		return new NavigateRequestBuilder();
	}
}
