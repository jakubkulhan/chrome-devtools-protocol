<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDisabledImageTypesRequestBuilder
{
	private $imageTypes;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDisabledImageTypesRequest
	{
		$instance = new SetDisabledImageTypesRequest();
		if ($this->imageTypes === null) {
			throw new BuilderException('Property [imageTypes] is required.');
		}
		$instance->imageTypes = $this->imageTypes;
		return $instance;
	}


	/**
	 * @param string[] $imageTypes
	 *
	 * @return self
	 */
	public function setImageTypes($imageTypes): self
	{
		$this->imageTypes = $imageTypes;
		return $this;
	}
}
