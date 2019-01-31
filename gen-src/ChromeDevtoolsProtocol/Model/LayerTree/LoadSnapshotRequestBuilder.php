<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadSnapshotRequestBuilder
{
	private $tiles;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): LoadSnapshotRequest
	{
		$instance = new LoadSnapshotRequest();
		if ($this->tiles === null) {
			throw new BuilderException('Property [tiles] is required.');
		}
		$instance->tiles = $this->tiles;
		return $instance;
	}


	/**
	 * @param PictureTile[] $tiles
	 *
	 * @return self
	 */
	public function setTiles($tiles): self
	{
		$this->tiles = $tiles;
		return $this;
	}
}
