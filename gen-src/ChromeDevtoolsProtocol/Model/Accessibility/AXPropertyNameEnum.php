<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Values of AXProperty name: - from 'busy' to 'roledescription': states which apply to every AX node - from 'live' to 'root': attributes which apply to nodes in live regions - from 'autocomplete' to 'valuetext': attributes which apply to widgets - from 'checked' to 'selected': states which apply to widgets - from 'activedescendant' to 'owns': relationships between elements other than parent/child/sibling - from 'activeFullscreenElement' to 'uninteresting': reasons why this noode is hidden
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
	public const ACTIVE_FULLSCREEN_ELEMENT = 'activeFullscreenElement';
	public const ACTIVE_MODAL_DIALOG = 'activeModalDialog';
	public const ACTIVE_ARIA_MODAL_DIALOG = 'activeAriaModalDialog';
	public const ARIA_HIDDEN_ELEMENT = 'ariaHiddenElement';
	public const ARIA_HIDDEN_SUBTREE = 'ariaHiddenSubtree';
	public const EMPTY_ALT = 'emptyAlt';
	public const EMPTY_TEXT = 'emptyText';
	public const INERT_ELEMENT = 'inertElement';
	public const INERT_SUBTREE = 'inertSubtree';
	public const LABEL_CONTAINER = 'labelContainer';
	public const LABEL_FOR = 'labelFor';
	public const NOT_RENDERED = 'notRendered';
	public const NOT_VISIBLE = 'notVisible';
	public const PRESENTATIONAL_ROLE = 'presentationalRole';
	public const PROBABLY_PRESENTATIONAL = 'probablyPresentational';
	public const INACTIVE_CAROUSEL_TAB_CONTENT = 'inactiveCarouselTabContent';
	public const UNINTERESTING = 'uninteresting';
}
