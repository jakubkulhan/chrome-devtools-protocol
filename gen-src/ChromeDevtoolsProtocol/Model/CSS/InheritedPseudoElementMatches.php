<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Inherited pseudo element matches from pseudos of an ancestor node.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InheritedPseudoElementMatches implements \JsonSerializable
{
	/**
	 * Matches of pseudo styles from the pseudos of an ancestor node.
	 *
	 * @var PseudoElementMatches[]
	 */
	public $pseudoElements;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->pseudoElements)) {
			$instance->pseudoElements = [];
			foreach ($data->pseudoElements as $item) {
				$instance->pseudoElements[] = PseudoElementMatches::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->pseudoElements !== null) {
			$data->pseudoElements = [];
			foreach ($this->pseudoElements as $item) {
				$data->pseudoElements[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
