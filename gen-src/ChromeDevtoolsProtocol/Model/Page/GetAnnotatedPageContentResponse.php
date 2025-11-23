<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getAnnotatedPageContent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAnnotatedPageContentResponse implements \JsonSerializable
{
	/**
	 * The annotated page content as a base64 encoded protobuf. The format is defined by the `AnnotatedPageContent` message in components/optimization_guide/proto/features/common_quality_data.proto (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $content;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->content)) {
			$instance->content = (string)$data->content;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->content !== null) {
			$data->content = $this->content;
		}
		return $data;
	}
}
