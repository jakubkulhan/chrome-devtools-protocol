<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Providence about how an ad script was determined to be such. It is an ad because its url matched a filterlist rule, or because some other ad script was on the stack when this script was loaded.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdAncestry implements \JsonSerializable
{
	/**
	 * The ad-script in the stack when the offending script was loaded. This is recursive down to the root script that was tagged due to the filterlist rule.
	 *
	 * @var AdScriptIdentifier[]
	 */
	public $adAncestryChain;

	/**
	 * The filterlist rule that caused the root (last) script in `adAncestry` to be ad-tagged.
	 *
	 * @var string|null
	 */
	public $rootScriptFilterlistRule;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->adAncestryChain)) {
			$instance->adAncestryChain = [];
			foreach ($data->adAncestryChain as $item) {
				$instance->adAncestryChain[] = AdScriptIdentifier::fromJson($item);
			}
		}
		if (isset($data->rootScriptFilterlistRule)) {
			$instance->rootScriptFilterlistRule = (string)$data->rootScriptFilterlistRule;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->adAncestryChain !== null) {
			$data->adAncestryChain = [];
			foreach ($this->adAncestryChain as $item) {
				$data->adAncestryChain[] = $item->jsonSerialize();
			}
		}
		if ($this->rootScriptFilterlistRule !== null) {
			$data->rootScriptFilterlistRule = $this->rootScriptFilterlistRule;
		}
		return $data;
	}
}
