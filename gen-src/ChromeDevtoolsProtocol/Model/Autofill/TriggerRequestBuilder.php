<?php

namespace ChromeDevtoolsProtocol\Model\Autofill;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TriggerRequestBuilder
{
	private $fieldId;
	private $card;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): TriggerRequest
	{
		$instance = new TriggerRequest();
		if ($this->fieldId === null) {
			throw new BuilderException('Property [fieldId] is required.');
		}
		$instance->fieldId = $this->fieldId;
		if ($this->card === null) {
			throw new BuilderException('Property [card] is required.');
		}
		$instance->card = $this->card;
		return $instance;
	}


	/**
	 * @param int $fieldId
	 *
	 * @return self
	 */
	public function setFieldId($fieldId): self
	{
		$this->fieldId = $fieldId;
		return $this;
	}


	/**
	 * @param CreditCard $card
	 *
	 * @return self
	 */
	public function setCard($card): self
	{
		$this->card = $card;
		return $this;
	}
}
