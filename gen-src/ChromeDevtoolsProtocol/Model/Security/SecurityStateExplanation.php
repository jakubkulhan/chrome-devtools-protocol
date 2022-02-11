<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * An explanation of an factor contributing to the security state.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SecurityStateExplanation implements \JsonSerializable
{
	/**
	 * Security state representing the severity of the factor being explained.
	 *
	 * @var string
	 */
	public $securityState;

	/**
	 * Title describing the type of factor.
	 *
	 * @var string
	 */
	public $title;

	/**
	 * Short phrase describing the type of factor.
	 *
	 * @var string
	 */
	public $summary;

	/**
	 * Full text explanation of the factor.
	 *
	 * @var string
	 */
	public $description;

	/**
	 * The type of mixed content described by the explanation.
	 *
	 * @var string
	 */
	public $mixedContentType;

	/**
	 * Page certificate.
	 *
	 * @var string[]
	 */
	public $certificate;

	/**
	 * Recommendations to fix any issues.
	 *
	 * @var string[]|null
	 */
	public $recommendations;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->securityState)) {
			$instance->securityState = (string)$data->securityState;
		}
		if (isset($data->title)) {
			$instance->title = (string)$data->title;
		}
		if (isset($data->summary)) {
			$instance->summary = (string)$data->summary;
		}
		if (isset($data->description)) {
			$instance->description = (string)$data->description;
		}
		if (isset($data->mixedContentType)) {
			$instance->mixedContentType = (string)$data->mixedContentType;
		}
		if (isset($data->certificate)) {
			$instance->certificate = [];
			foreach ($data->certificate as $item) {
				$instance->certificate[] = (string)$item;
			}
		}
		if (isset($data->recommendations)) {
			$instance->recommendations = [];
			foreach ($data->recommendations as $item) {
				$instance->recommendations[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->securityState !== null) {
			$data->securityState = $this->securityState;
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		if ($this->summary !== null) {
			$data->summary = $this->summary;
		}
		if ($this->description !== null) {
			$data->description = $this->description;
		}
		if ($this->mixedContentType !== null) {
			$data->mixedContentType = $this->mixedContentType;
		}
		if ($this->certificate !== null) {
			$data->certificate = [];
			foreach ($this->certificate as $item) {
				$data->certificate[] = $item;
			}
		}
		if ($this->recommendations !== null) {
			$data->recommendations = [];
			foreach ($this->recommendations as $item) {
				$data->recommendations[] = $item;
			}
		}
		return $data;
	}
}
