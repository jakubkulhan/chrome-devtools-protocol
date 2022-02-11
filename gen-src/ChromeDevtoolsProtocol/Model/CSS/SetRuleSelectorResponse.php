<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setRuleSelector command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRuleSelectorResponse implements \JsonSerializable
{
	/**
	 * The resulting selector list after modification.
	 *
	 * @var SelectorList
	 */
	public $selectorList;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->selectorList)) {
			$instance->selectorList = SelectorList::fromJson($data->selectorList);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->selectorList !== null) {
			$data->selectorList = $this->selectorList->jsonSerialize();
		}
		return $data;
	}
}
