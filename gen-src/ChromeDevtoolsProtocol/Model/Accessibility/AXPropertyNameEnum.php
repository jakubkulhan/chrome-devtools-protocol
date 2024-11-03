<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Values of AXProperty name: - from 'busy' to 'roledescription': states which apply to every AX node - from 'live' to 'root': attributes which apply to nodes in live regions - from 'autocomplete' to 'valuetext': attributes which apply to widgets - from 'checked' to 'selected': states which apply to widgets - from 'activedescendant' to 'owns' - relationships between elements other than parent/child/sibling.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AXPropertyNameEnum
{
	public const ACTIONS = 'actions';
	public const BUSY = 'busy';
	public const DISABLED = 'disabled';
	public const EDITABLE = 'editable';
	public const FOCUSABLE = 'focusable';
	public const FOCUSED = 'focused';
	public const HIDDEN = 'hidden';
	public const HIDDEN_ROOT = 'hiddenRoot';
	public const INVALID = 'invalid';
	public const KEYSHORTCUTS = 'keyshortcuts';
	public const SETTABLE = 'settable';
	public const ROLEDESCRIPTION = 'roledescription';
	public const LIVE = 'live';
	public const ATOMIC = 'atomic';
	public const RELEVANT = 'relevant';
	public const ROOT = 'root';
	public const AUTOCOMPLETE = 'autocomplete';
	public const HAS_POPUP = 'hasPopup';
	public const LEVEL = 'level';
	public const MULTISELECTABLE = 'multiselectable';
	public const ORIENTATION = 'orientation';
	public const MULTILINE = 'multiline';
	public const READONLY = 'readonly';
	public const REQUIRED = 'required';
	public const VALUEMIN = 'valuemin';
	public const VALUEMAX = 'valuemax';
	public const VALUETEXT = 'valuetext';
	public const CHECKED = 'checked';
	public const EXPANDED = 'expanded';
	public const MODAL = 'modal';
	public const PRESSED = 'pressed';
	public const SELECTED = 'selected';
	public const ACTIVEDESCENDANT = 'activedescendant';
	public const CONTROLS = 'controls';
	public const DESCRIBEDBY = 'describedby';
	public const DETAILS = 'details';
	public const ERRORMESSAGE = 'errormessage';
	public const FLOWTO = 'flowto';
	public const LABELLEDBY = 'labelledby';
	public const OWNS = 'owns';
	public const URL = 'url';
}
