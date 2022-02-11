<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Coverage data for a JavaScript script.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScriptCoverage implements \JsonSerializable
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
	 * Functions contained in the script that has coverage data.
	 *
	 * @var FunctionCoverage[]
	 */
	public $functions;


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
		if (isset($data->functions)) {
			$instance->functions = [];
			foreach ($data->functions as $item) {
				$instance->functions[] = FunctionCoverage::fromJson($item);
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
		if ($this->functions !== null) {
			$data->functions = [];
			foreach ($this->functions as $item) {
				$data->functions[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
