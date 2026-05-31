<?php

namespace ChromeDevtoolsProtocol\Model\Ads;

/**
 * Ad metrics for a page.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdMetrics implements \JsonSerializable
{
	/**
	 * The viewport ad density by area, represented as a percentage (an integer between 0 and 100).
	 *
	 * @var int
	 */
	public $viewportAdDensityByArea;

	/**
	 * The time-weighted average of the viewport ad density by area, measured across the duration of the page.
	 *
	 * @var int|float
	 */
	public $averageViewportAdDensityByArea;

	/**
	 * The number of ads currently visible within the viewport.
	 *
	 * @var int
	 */
	public $viewportAdCount;

	/**
	 * The time-weighted average of the viewport ad count, measured across the duration of the page.
	 *
	 * @var int|float
	 */
	public $averageViewportAdCount;

	/**
	 * The total ad CPU usage, in milliseconds.
	 *
	 * @var int|float
	 */
	public $totalAdCpuTime;

	/**
	 * The total ad network bytes.
	 *
	 * @var int|float
	 */
	public $totalAdNetworkBytes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->viewportAdDensityByArea)) {
			$instance->viewportAdDensityByArea = (int)$data->viewportAdDensityByArea;
		}
		if (isset($data->averageViewportAdDensityByArea)) {
			$instance->averageViewportAdDensityByArea = $data->averageViewportAdDensityByArea;
		}
		if (isset($data->viewportAdCount)) {
			$instance->viewportAdCount = (int)$data->viewportAdCount;
		}
		if (isset($data->averageViewportAdCount)) {
			$instance->averageViewportAdCount = $data->averageViewportAdCount;
		}
		if (isset($data->totalAdCpuTime)) {
			$instance->totalAdCpuTime = $data->totalAdCpuTime;
		}
		if (isset($data->totalAdNetworkBytes)) {
			$instance->totalAdNetworkBytes = $data->totalAdNetworkBytes;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->viewportAdDensityByArea !== null) {
			$data->viewportAdDensityByArea = $this->viewportAdDensityByArea;
		}
		if ($this->averageViewportAdDensityByArea !== null) {
			$data->averageViewportAdDensityByArea = $this->averageViewportAdDensityByArea;
		}
		if ($this->viewportAdCount !== null) {
			$data->viewportAdCount = $this->viewportAdCount;
		}
		if ($this->averageViewportAdCount !== null) {
			$data->averageViewportAdCount = $this->averageViewportAdCount;
		}
		if ($this->totalAdCpuTime !== null) {
			$data->totalAdCpuTime = $this->totalAdCpuTime;
		}
		if ($this->totalAdNetworkBytes !== null) {
			$data->totalAdNetworkBytes = $this->totalAdNetworkBytes;
		}
		return $data;
	}
}
