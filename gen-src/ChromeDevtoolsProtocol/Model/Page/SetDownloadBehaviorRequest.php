<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setDownloadBehavior command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDownloadBehaviorRequest implements \JsonSerializable
{
	/**
	 * Whether to allow all or deny all download requests, or use default Chrome behavior if available (otherwise deny).
	 *
	 * @var string
	 */
	public $behavior;

	/**
	 * The default path to save downloaded files to. This is required if behavior is set to 'allow'
	 *
	 * @var string|null
	 */
	public $downloadPath;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->behavior)) {
			$instance->behavior = (string)$data->behavior;
		}
		if (isset($data->downloadPath)) {
			$instance->downloadPath = (string)$data->downloadPath;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->behavior !== null) {
			$data->behavior = $this->behavior;
		}
		if ($this->downloadPath !== null) {
			$data->downloadPath = $this->downloadPath;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDownloadBehaviorRequestBuilder
	 */
	public static function builder(): SetDownloadBehaviorRequestBuilder
	{
		return new SetDownloadBehaviorRequestBuilder();
	}
}
