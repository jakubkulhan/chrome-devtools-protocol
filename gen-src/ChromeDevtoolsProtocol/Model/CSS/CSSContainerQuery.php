<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS container query rule descriptor.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSContainerQuery implements \JsonSerializable
{
	/**
	 * Container query text.
	 *
	 * @var string
	 */
	public $text;

	/**
	 * The associated rule header range in the enclosing stylesheet (if available).
	 *
	 * @var SourceRange|null
	 */
	public $range;

	/**
	 * Identifier of the stylesheet containing this object (if exists).
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * Optional name for the container.
	 *
	 * @var string|null
	 */
	public $name;

	/**
	 * Optional physical axes queried for the container.
	 *
	 * @var string
	 */
	public $physicalAxes;

	/**
	 * Optional logical axes queried for the container.
	 *
	 * @var string
	 */
	public $logicalAxes;

	/**
	 * true if the query contains scroll-state() queries.
	 *
	 * @var bool|null
	 */
	public $queriesScrollState;

	/**
	 * true if the query contains anchored() queries.
	 *
	 * @var bool|null
	 */
	public $queriesAnchored;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		if (isset($data->range)) {
			$instance->range = SourceRange::fromJson($data->range);
		}
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->physicalAxes)) {
			$instance->physicalAxes = (string)$data->physicalAxes;
		}
		if (isset($data->logicalAxes)) {
			$instance->logicalAxes = (string)$data->logicalAxes;
		}
		if (isset($data->queriesScrollState)) {
			$instance->queriesScrollState = (bool)$data->queriesScrollState;
		}
		if (isset($data->queriesAnchored)) {
			$instance->queriesAnchored = (bool)$data->queriesAnchored;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->range !== null) {
			$data->range = $this->range->jsonSerialize();
		}
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->physicalAxes !== null) {
			$data->physicalAxes = $this->physicalAxes;
		}
		if ($this->logicalAxes !== null) {
			$data->logicalAxes = $this->logicalAxes;
		}
		if ($this->queriesScrollState !== null) {
			$data->queriesScrollState = $this->queriesScrollState;
		}
		if ($this->queriesAnchored !== null) {
			$data->queriesAnchored = $this->queriesAnchored;
		}
		return $data;
	}
}
