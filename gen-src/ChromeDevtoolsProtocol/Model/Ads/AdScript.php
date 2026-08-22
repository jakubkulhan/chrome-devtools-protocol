<?php

namespace ChromeDevtoolsProtocol\Model\Ads;

use ChromeDevtoolsProtocol\Model\Network\AdProvenance;

/**
 * An ad script. Note: when the script is a transitive ad script, we only fill in the immediate ancestor script in the provenance's adScriptAncestry field (as its first entry), rather than filling in the full ancestry. This saves work for the backend, and the frontend can reconstruct the full ancestry if necessary.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdScript implements \JsonSerializable
{
	/**
	 * The script ID.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * The ad provenance.
	 *
	 * @var AdProvenance
	 */
	public $provenance;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->provenance)) {
			$instance->provenance = AdProvenance::fromJson($data->provenance);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->provenance !== null) {
			$data->provenance = $this->provenance->jsonSerialize();
		}
		return $data;
	}
}
