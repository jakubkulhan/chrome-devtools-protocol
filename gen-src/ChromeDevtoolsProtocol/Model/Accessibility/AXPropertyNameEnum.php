<?php
namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Values of AXProperty name: from 'busy' to 'roledescription' - states which apply to every AX node, from 'live' to 'root' - attributes which apply to nodes in live regions, from 'autocomplete' to 'valuetext' - attributes which apply to widgets, from 'checked' to 'selected' - states which apply to widgets, from 'activedescendant' to 'owns' - relationships between elements other than parent/child/sibling.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AXPropertyNameEnum
{
	const BUSY = 'busy';
	const DISABLED = 'disabled';
	const HIDDEN = 'hidden';
	const HIDDEN_ROOT = 'hiddenRoot';
	const INVALID = 'invalid';
	const KEYSHORTCUTS = 'keyshortcuts';
	const ROLEDESCRIPTION = 'roledescription';
	const LIVE = 'live';
	const ATOMIC = 'atomic';
	const RELEVANT = 'relevant';
	const ROOT = 'root';
	const AUTOCOMPLETE = 'autocomplete';
	const HASPOPUP = 'haspopup';
	const LEVEL = 'level';
	const MULTISELECTABLE = 'multiselectable';
	const ORIENTATION = 'orientation';
	const MULTILINE = 'multiline';
	const READONLY = 'readonly';
	const REQUIRED = 'required';
	const VALUEMIN = 'valuemin';
	const VALUEMAX = 'valuemax';
	const VALUETEXT = 'valuetext';
	const CHECKED = 'checked';
	const EXPANDED = 'expanded';
	const MODAL = 'modal';
	const PRESSED = 'pressed';
	const SELECTED = 'selected';
	const ACTIVEDESCENDANT = 'activedescendant';
	const CONTROLS = 'controls';
	const DESCRIBEDBY = 'describedby';
	const DETAILS = 'details';
	const ERRORMESSAGE = 'errormessage';
	const FLOWTO = 'flowto';
	const LABELLEDBY = 'labelledby';
	const OWNS = 'owns';

}
