<?php
namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setAutoAttachToCreatedPages command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAutoAttachToCreatedPagesRequest implements \JsonSerializable
{
	/**
	 * If true, browser will open a new inspector window for every page created from this one.
	 *
	 * @var bool
	 */
	public $autoAttach;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->autoAttach)) {
			$instance->autoAttach = (bool)$data->autoAttach;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->autoAttach !== null) {
			$data->autoAttach = $this->autoAttach;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAutoAttachToCreatedPagesRequestBuilder
	 */
	public static function builder(): SetAutoAttachToCreatedPagesRequestBuilder
	{
		return new SetAutoAttachToCreatedPagesRequestBuilder();
	}
}
