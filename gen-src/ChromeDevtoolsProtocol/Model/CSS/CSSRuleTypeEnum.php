<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Enum indicating the type of a CSS rule, used to represent the order of a style rule's ancestors. This list only contains rule types that are collected during the ancestor rule collection.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSRuleTypeEnum
{
	public const MEDIA_RULE = 'MediaRule';
	public const SUPPORTS_RULE = 'SupportsRule';
	public const CONTAINER_RULE = 'ContainerRule';
	public const LAYER_RULE = 'LayerRule';
	public const SCOPE_RULE = 'ScopeRule';
}
