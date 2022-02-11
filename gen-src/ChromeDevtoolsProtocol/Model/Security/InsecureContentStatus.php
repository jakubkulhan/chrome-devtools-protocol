<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * Information about insecure content on the page.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InsecureContentStatus implements \JsonSerializable
{
	/**
	 * Always false.
	 *
	 * @var bool
	 */
	public $ranMixedContent;

	/**
	 * Always false.
	 *
	 * @var bool
	 */
	public $displayedMixedContent;

	/**
	 * Always false.
	 *
	 * @var bool
	 */
	public $containedMixedForm;

	/**
	 * Always false.
	 *
	 * @var bool
	 */
	public $ranContentWithCertErrors;

	/**
	 * Always false.
	 *
	 * @var bool
	 */
	public $displayedContentWithCertErrors;

	/**
	 * Always set to unknown.
	 *
	 * @var string
	 */
	public $ranInsecureContentStyle;

	/**
	 * Always set to unknown.
	 *
	 * @var string
	 */
	public $displayedInsecureContentStyle;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ranMixedContent)) {
			$instance->ranMixedContent = (bool)$data->ranMixedContent;
		}
		if (isset($data->displayedMixedContent)) {
			$instance->displayedMixedContent = (bool)$data->displayedMixedContent;
		}
		if (isset($data->containedMixedForm)) {
			$instance->containedMixedForm = (bool)$data->containedMixedForm;
		}
		if (isset($data->ranContentWithCertErrors)) {
			$instance->ranContentWithCertErrors = (bool)$data->ranContentWithCertErrors;
		}
		if (isset($data->displayedContentWithCertErrors)) {
			$instance->displayedContentWithCertErrors = (bool)$data->displayedContentWithCertErrors;
		}
		if (isset($data->ranInsecureContentStyle)) {
			$instance->ranInsecureContentStyle = (string)$data->ranInsecureContentStyle;
		}
		if (isset($data->displayedInsecureContentStyle)) {
			$instance->displayedInsecureContentStyle = (string)$data->displayedInsecureContentStyle;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ranMixedContent !== null) {
			$data->ranMixedContent = $this->ranMixedContent;
		}
		if ($this->displayedMixedContent !== null) {
			$data->displayedMixedContent = $this->displayedMixedContent;
		}
		if ($this->containedMixedForm !== null) {
			$data->containedMixedForm = $this->containedMixedForm;
		}
		if ($this->ranContentWithCertErrors !== null) {
			$data->ranContentWithCertErrors = $this->ranContentWithCertErrors;
		}
		if ($this->displayedContentWithCertErrors !== null) {
			$data->displayedContentWithCertErrors = $this->displayedContentWithCertErrors;
		}
		if ($this->ranInsecureContentStyle !== null) {
			$data->ranInsecureContentStyle = $this->ranInsecureContentStyle;
		}
		if ($this->displayedInsecureContentStyle !== null) {
			$data->displayedInsecureContentStyle = $this->displayedInsecureContentStyle;
		}
		return $data;
	}
}
