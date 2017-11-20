<?php
namespace ChromeDevtoolsProtocol\Model\ApplicationCache;

/**
 * Detailed application cache resource information.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ApplicationCacheResource implements \JsonSerializable
{
	/**
	 * Resource url.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Resource size.
	 *
	 * @var int
	 */
	public $size;

	/**
	 * Resource type.
	 *
	 * @var string
	 */
	public $type;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->size)) {
			$instance->size = (int)$data->size;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
