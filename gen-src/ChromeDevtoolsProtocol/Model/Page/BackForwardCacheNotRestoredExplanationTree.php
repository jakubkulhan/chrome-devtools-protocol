<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.BackForwardCacheNotRestoredExplanationTree.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BackForwardCacheNotRestoredExplanationTree implements \JsonSerializable
{
	/**
	 * URL of each frame
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Not restored reasons of each frame
	 *
	 * @var BackForwardCacheNotRestoredExplanation[]
	 */
	public $explanations;

	/**
	 * Array of children frame
	 *
	 * @var BackForwardCacheNotRestoredExplanationTree[]
	 */
	public $children;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->explanations)) {
			$instance->explanations = [];
			foreach ($data->explanations as $item) {
				$instance->explanations[] = BackForwardCacheNotRestoredExplanation::fromJson($item);
			}
		}
		if (isset($data->children)) {
			$instance->children = [];
			foreach ($data->children as $item) {
				$instance->children[] = BackForwardCacheNotRestoredExplanationTree::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->explanations !== null) {
			$data->explanations = [];
			foreach ($this->explanations as $item) {
				$data->explanations[] = $item->jsonSerialize();
			}
		}
		if ($this->children !== null) {
			$data->children = [];
			foreach ($this->children as $item) {
				$data->children[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
