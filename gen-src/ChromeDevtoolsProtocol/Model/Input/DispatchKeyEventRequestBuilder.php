<?php

namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchKeyEventRequestBuilder
{
	private $type;
	private $modifiers;
	private $timestamp;
	private $text;
	private $unmodifiedText;
	private $keyIdentifier;
	private $code;
	private $key;
	private $windowsVirtualKeyCode;
	private $nativeVirtualKeyCode;
	private $autoRepeat;
	private $isKeypad;
	private $isSystemKey;
	private $location;
	private $commands;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DispatchKeyEventRequest
	{
		$instance = new DispatchKeyEventRequest();
		if ($this->type === null) {
			throw new BuilderException('Property [type] is required.');
		}
		$instance->type = $this->type;
		$instance->modifiers = $this->modifiers;
		$instance->timestamp = $this->timestamp;
		$instance->text = $this->text;
		$instance->unmodifiedText = $this->unmodifiedText;
		$instance->keyIdentifier = $this->keyIdentifier;
		$instance->code = $this->code;
		$instance->key = $this->key;
		$instance->windowsVirtualKeyCode = $this->windowsVirtualKeyCode;
		$instance->nativeVirtualKeyCode = $this->nativeVirtualKeyCode;
		$instance->autoRepeat = $this->autoRepeat;
		$instance->isKeypad = $this->isKeypad;
		$instance->isSystemKey = $this->isSystemKey;
		$instance->location = $this->location;
		$instance->commands = $this->commands;
		return $instance;
	}


	/**
	 * @param string $type
	 *
	 * @return self
	 */
	public function setType($type): self
	{
		$this->type = $type;
		return $this;
	}


	/**
	 * @param int|null $modifiers
	 *
	 * @return self
	 */
	public function setModifiers($modifiers): self
	{
		$this->modifiers = $modifiers;
		return $this;
	}


	/**
	 * @param int|float $timestamp
	 *
	 * @return self
	 */
	public function setTimestamp($timestamp): self
	{
		$this->timestamp = $timestamp;
		return $this;
	}


	/**
	 * @param string|null $text
	 *
	 * @return self
	 */
	public function setText($text): self
	{
		$this->text = $text;
		return $this;
	}


	/**
	 * @param string|null $unmodifiedText
	 *
	 * @return self
	 */
	public function setUnmodifiedText($unmodifiedText): self
	{
		$this->unmodifiedText = $unmodifiedText;
		return $this;
	}


	/**
	 * @param string|null $keyIdentifier
	 *
	 * @return self
	 */
	public function setKeyIdentifier($keyIdentifier): self
	{
		$this->keyIdentifier = $keyIdentifier;
		return $this;
	}


	/**
	 * @param string|null $code
	 *
	 * @return self
	 */
	public function setCode($code): self
	{
		$this->code = $code;
		return $this;
	}


	/**
	 * @param string|null $key
	 *
	 * @return self
	 */
	public function setKey($key): self
	{
		$this->key = $key;
		return $this;
	}


	/**
	 * @param int|null $windowsVirtualKeyCode
	 *
	 * @return self
	 */
	public function setWindowsVirtualKeyCode($windowsVirtualKeyCode): self
	{
		$this->windowsVirtualKeyCode = $windowsVirtualKeyCode;
		return $this;
	}


	/**
	 * @param int|null $nativeVirtualKeyCode
	 *
	 * @return self
	 */
	public function setNativeVirtualKeyCode($nativeVirtualKeyCode): self
	{
		$this->nativeVirtualKeyCode = $nativeVirtualKeyCode;
		return $this;
	}


	/**
	 * @param bool|null $autoRepeat
	 *
	 * @return self
	 */
	public function setAutoRepeat($autoRepeat): self
	{
		$this->autoRepeat = $autoRepeat;
		return $this;
	}


	/**
	 * @param bool|null $isKeypad
	 *
	 * @return self
	 */
	public function setIsKeypad($isKeypad): self
	{
		$this->isKeypad = $isKeypad;
		return $this;
	}


	/**
	 * @param bool|null $isSystemKey
	 *
	 * @return self
	 */
	public function setIsSystemKey($isSystemKey): self
	{
		$this->isSystemKey = $isSystemKey;
		return $this;
	}


	/**
	 * @param int|null $location
	 *
	 * @return self
	 */
	public function setLocation($location): self
	{
		$this->location = $location;
		return $this;
	}


	/**
	 * @param string[]|null $commands
	 *
	 * @return self
	 */
	public function setCommands($commands): self
	{
		$this->commands = $commands;
		return $this;
	}
}
