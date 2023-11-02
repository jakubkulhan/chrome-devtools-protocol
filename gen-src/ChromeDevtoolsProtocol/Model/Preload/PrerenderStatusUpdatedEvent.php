<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Fired when a prerender attempt is updated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrerenderStatusUpdatedEvent implements \JsonSerializable
{
	/** @var PreloadingAttemptKey */
	public $key;

	/** @var string */
	public $status;

	/** @var string */
	public $prerenderStatus;

	/**
	 * This is used to give users more information about the name of Mojo interface that is incompatible with prerender and has caused the cancellation of the attempt.
	 *
	 * @var string|null
	 */
	public $disallowedMojoInterface;

	/** @var PrerenderMismatchedHeaders[]|null */
	public $mismatchedHeaders;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = PreloadingAttemptKey::fromJson($data->key);
		}
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		if (isset($data->prerenderStatus)) {
			$instance->prerenderStatus = (string)$data->prerenderStatus;
		}
		if (isset($data->disallowedMojoInterface)) {
			$instance->disallowedMojoInterface = (string)$data->disallowedMojoInterface;
		}
		if (isset($data->mismatchedHeaders)) {
			$instance->mismatchedHeaders = [];
			foreach ($data->mismatchedHeaders as $item) {
				$instance->mismatchedHeaders[] = PrerenderMismatchedHeaders::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key->jsonSerialize();
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->prerenderStatus !== null) {
			$data->prerenderStatus = $this->prerenderStatus;
		}
		if ($this->disallowedMojoInterface !== null) {
			$data->disallowedMojoInterface = $this->disallowedMojoInterface;
		}
		if ($this->mismatchedHeaders !== null) {
			$data->mismatchedHeaders = [];
			foreach ($this->mismatchedHeaders as $item) {
				$data->mismatchedHeaders[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
