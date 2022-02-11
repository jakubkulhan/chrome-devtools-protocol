<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Type profile data collected during runtime for a JavaScript script.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScriptTypeProfile implements \JsonSerializable
{
	/**
	 * JavaScript script id.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * JavaScript script name or url.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Type profile entries for parameters and return values of the functions in the script.
	 *
	 * @var TypeProfileEntry[]
	 */
	public $entries;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->entries)) {
			$instance->entries = [];
			foreach ($data->entries as $item) {
				$instance->entries[] = TypeProfileEntry::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->entries !== null) {
			$data->entries = [];
			foreach ($this->entries as $item) {
				$data->entries[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
