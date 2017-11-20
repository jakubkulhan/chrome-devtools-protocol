<?php
namespace ChromeDevtoolsProtocol\Model\Database;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDatabaseTableNamesRequestBuilder
{
	private $databaseId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetDatabaseTableNamesRequest
	{
		$instance = new GetDatabaseTableNamesRequest();
		if ($this->databaseId === null) {
			throw new BuilderException('Property [databaseId] is required.');
		}
		$instance->databaseId = $this->databaseId;
		return $instance;
	}


	/**
	 * @param string $databaseId
	 *
	 * @return self
	 */
	public function setDatabaseId($databaseId): self
	{
		$this->databaseId = $databaseId;
		return $this;
	}
}
