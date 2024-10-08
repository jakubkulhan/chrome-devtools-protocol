<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.forcePseudoState command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ForcePseudoStateRequest implements \JsonSerializable
{
	/**
	 * The element id for which to force the pseudo state.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Element pseudo classes to force when computing the element's style.
	 *
	 * @var string[]
	 */
	public $forcedPseudoClasses;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->forcedPseudoClasses)) {
			$instance->forcedPseudoClasses = [];
			foreach ($data->forcedPseudoClasses as $item) {
				$instance->forcedPseudoClasses[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->forcedPseudoClasses !== null) {
			$data->forcedPseudoClasses = [];
			foreach ($this->forcedPseudoClasses as $item) {
				$data->forcedPseudoClasses[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ForcePseudoStateRequestBuilder
	 */
	public static function builder(): ForcePseudoStateRequestBuilder
	{
		return new ForcePseudoStateRequestBuilder();
	}
}
