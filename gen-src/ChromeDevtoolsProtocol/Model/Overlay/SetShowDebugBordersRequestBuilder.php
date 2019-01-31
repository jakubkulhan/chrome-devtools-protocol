<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowDebugBordersRequestBuilder
{
	private $show;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowDebugBordersRequest
	{
		$instance = new SetShowDebugBordersRequest();
		if ($this->show === null) {
			throw new BuilderException('Property [show] is required.');
		}
		$instance->show = $this->show;
		return $instance;
	}


	/**
	 * @param bool $show
	 *
	 * @return self
	 */
	public function setShow($show): self
	{
		$this->show = $show;
		return $this;
	}
}
