<?php
namespace ChromeDevtoolsProtocol\Model\ApplicationCache;

/**
 * Response to ApplicationCache.getManifestForFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetManifestForFrameResponse implements \JsonSerializable
{
	/**
	 * Manifest URL for document in the given frame.
	 *
	 * @var string
	 */
	public $manifestURL;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->manifestURL)) {
			$instance->manifestURL = (string)$data->manifestURL;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->manifestURL !== null) {
			$data->manifestURL = $this->manifestURL;
		}
		return $data;
	}
}
