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
	private $frameId;
	private $card;
	private $address;


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
		$instance->frameId = $this->frameId;
		$instance->card = $this->card;
		$instance->address = $this->address;
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
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}


	/**
	 * @param CreditCard|null $card
	 *
	 * @return self
	 */
	public function setCard($card): self
	{
		$this->card = $card;
		return $this;
	}


	/**
	 * @param Address|null $address
	 *
	 * @return self
	 */
	public function setAddress($address): self
	{
		$this->address = $address;
		return $this;
	}
}
