<?php
namespace ChromeDevtoolsProtocol\Model\Database;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecuteSQLRequestBuilder
{
	private $databaseId;

	private $query;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ExecuteSQLRequest
	{
		$instance = new ExecuteSQLRequest();
		if ($this->databaseId === null) {
			throw new BuilderException('Property [databaseId] is required.');
		}
		$instance->databaseId = $this->databaseId;
		if ($this->query === null) {
			throw new BuilderException('Property [query] is required.');
		}
		$instance->query = $this->query;
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


	/**
	 * @param string $query
	 *
	 * @return self
	 */
	public function setQuery($query): self
	{
		$this->query = $query;
		return $this;
	}
}
