<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDockTileRequestBuilder
{
	private $badgeLabel;

	private $image;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDockTileRequest
	{
		$instance = new SetDockTileRequest();
		$instance->badgeLabel = $this->badgeLabel;
		$instance->image = $this->image;
		return $instance;
	}


	/**
	 * @param string|null $badgeLabel
	 *
	 * @return self
	 */
	public function setBadgeLabel($badgeLabel): self
	{
		$this->badgeLabel = $badgeLabel;
		return $this;
	}


	/**
	 * @param string|null $image
	 *
	 * @return self
	 */
	public function setImage($image): self
	{
		$this->image = $image;
		return $this;
	}
}
