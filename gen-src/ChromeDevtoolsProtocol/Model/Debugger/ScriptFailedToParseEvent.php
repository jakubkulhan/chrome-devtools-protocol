<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;

/**
 * Fired when virtual machine fails to parse the script.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScriptFailedToParseEvent implements \JsonSerializable
{
	/**
	 * Identifier of the script parsed.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * URL or name of the script parsed (if any).
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Line offset of the script within the resource with given URL (for script tags).
	 *
	 * @var int
	 */
	public $startLine;

	/**
	 * Column offset of the script within the resource with given URL.
	 *
	 * @var int
	 */
	public $startColumn;

	/**
	 * Last line of the script.
	 *
	 * @var int
	 */
	public $endLine;

	/**
	 * Length of the last line of the script.
	 *
	 * @var int
	 */
	public $endColumn;

	/**
	 * Specifies script creation context.
	 *
	 * @var int
	 */
	public $executionContextId;

	/**
	 * Content hash of the script, SHA-256.
	 *
	 * @var string
	 */
	public $hash;

	/**
	 * Embedder-specific auxiliary data.
	 *
	 * @var object|null
	 */
	public $executionContextAuxData;

	/**
	 * URL of source map associated with script (if any).
	 *
	 * @var string|null
	 */
	public $sourceMapURL;

	/**
	 * True, if this script has sourceURL.
	 *
	 * @var bool|null
	 */
	public $hasSourceURL;

	/**
	 * True, if this script is ES6 module.
	 *
	 * @var bool|null
	 */
	public $isModule;

	/**
	 * This script length.
	 *
	 * @var int|null
	 */
	public $length;

	/**
	 * JavaScript top stack frame of where the script parsed event was triggered if available.
	 *
	 * @var StackTrace|null
	 */
	public $stackTrace;

	/**
	 * If the scriptLanguage is WebAssembly, the code section offset in the module.
	 *
	 * @var int|null
	 */
	public $codeOffset;

	/**
	 * The language of the script.
	 *
	 * @var string
	 */
	public $scriptLanguage;

	/**
	 * The name the embedder supplied for this script.
	 *
	 * @var string|null
	 */
	public $embedderName;


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
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->startLine)) {
			$instance->startLine = (int)$data->startLine;
		}
		if (isset($data->startColumn)) {
			$instance->startColumn = (int)$data->startColumn;
		}
		if (isset($data->endLine)) {
			$instance->endLine = (int)$data->endLine;
		}
		if (isset($data->endColumn)) {
			$instance->endColumn = (int)$data->endColumn;
		}
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		if (isset($data->hash)) {
			$instance->hash = (string)$data->hash;
		}
		if (isset($data->executionContextAuxData)) {
			$instance->executionContextAuxData = $data->executionContextAuxData;
		}
		if (isset($data->sourceMapURL)) {
			$instance->sourceMapURL = (string)$data->sourceMapURL;
		}
		if (isset($data->hasSourceURL)) {
			$instance->hasSourceURL = (bool)$data->hasSourceURL;
		}
		if (isset($data->isModule)) {
			$instance->isModule = (bool)$data->isModule;
		}
		if (isset($data->length)) {
			$instance->length = (int)$data->length;
		}
		if (isset($data->stackTrace)) {
			$instance->stackTrace = StackTrace::fromJson($data->stackTrace);
		}
		if (isset($data->codeOffset)) {
			$instance->codeOffset = (int)$data->codeOffset;
		}
		if (isset($data->scriptLanguage)) {
			$instance->scriptLanguage = (string)$data->scriptLanguage;
		}
		if (isset($data->embedderName)) {
			$instance->embedderName = (string)$data->embedderName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->startLine !== null) {
			$data->startLine = $this->startLine;
		}
		if ($this->startColumn !== null) {
			$data->startColumn = $this->startColumn;
		}
		if ($this->endLine !== null) {
			$data->endLine = $this->endLine;
		}
		if ($this->endColumn !== null) {
			$data->endColumn = $this->endColumn;
		}
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		if ($this->hash !== null) {
			$data->hash = $this->hash;
		}
		if ($this->executionContextAuxData !== null) {
			$data->executionContextAuxData = $this->executionContextAuxData;
		}
		if ($this->sourceMapURL !== null) {
			$data->sourceMapURL = $this->sourceMapURL;
		}
		if ($this->hasSourceURL !== null) {
			$data->hasSourceURL = $this->hasSourceURL;
		}
		if ($this->isModule !== null) {
			$data->isModule = $this->isModule;
		}
		if ($this->length !== null) {
			$data->length = $this->length;
		}
		if ($this->stackTrace !== null) {
			$data->stackTrace = $this->stackTrace->jsonSerialize();
		}
		if ($this->codeOffset !== null) {
			$data->codeOffset = $this->codeOffset;
		}
		if ($this->scriptLanguage !== null) {
			$data->scriptLanguage = $this->scriptLanguage;
		}
		if ($this->embedderName !== null) {
			$data->embedderName = $this->embedderName;
		}
		return $data;
	}
}
