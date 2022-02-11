<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setContainerQueryText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetContainerQueryTextResponse implements \JsonSerializable
{
	/**
	 * The resulting CSS container query rule after modification.
	 *
	 * @var CSSContainerQuery
	 */
	public $containerQuery;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->containerQuery)) {
			$instance->containerQuery = CSSContainerQuery::fromJson($data->containerQuery);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->containerQuery !== null) {
			$data->containerQuery = $this->containerQuery->jsonSerialize();
		}
		return $data;
	}
}
