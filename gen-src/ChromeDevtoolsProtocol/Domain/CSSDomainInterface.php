<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\CSS\AddRuleRequest;
use ChromeDevtoolsProtocol\Model\CSS\AddRuleResponse;
use ChromeDevtoolsProtocol\Model\CSS\CollectClassNamesRequest;
use ChromeDevtoolsProtocol\Model\CSS\CollectClassNamesResponse;
use ChromeDevtoolsProtocol\Model\CSS\CreateStyleSheetRequest;
use ChromeDevtoolsProtocol\Model\CSS\CreateStyleSheetResponse;
use ChromeDevtoolsProtocol\Model\CSS\FontsUpdatedEvent;
use ChromeDevtoolsProtocol\Model\CSS\ForcePseudoStateRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetBackgroundColorsRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetBackgroundColorsResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetComputedStyleForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetComputedStyleForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetInlineStylesForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetInlineStylesForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetLayersForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetLayersForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetMatchedStylesForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetMatchedStylesForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetMediaQueriesResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetPlatformFontsForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetPlatformFontsForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetStyleSheetTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetStyleSheetTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\MediaQueryResultChangedEvent;
use ChromeDevtoolsProtocol\Model\CSS\SetContainerQueryTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetContainerQueryTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetEffectivePropertyValueForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetKeyframeKeyRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetKeyframeKeyResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetLocalFontsEnabledRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetMediaTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetMediaTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetRuleSelectorRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetRuleSelectorResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetStyleSheetTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetStyleSheetTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetStyleTextsRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetStyleTextsResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetSupportsTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetSupportsTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\StopRuleUsageTrackingResponse;
use ChromeDevtoolsProtocol\Model\CSS\StyleSheetAddedEvent;
use ChromeDevtoolsProtocol\Model\CSS\StyleSheetChangedEvent;
use ChromeDevtoolsProtocol\Model\CSS\StyleSheetRemovedEvent;
use ChromeDevtoolsProtocol\Model\CSS\TakeComputedStyleUpdatesResponse;
use ChromeDevtoolsProtocol\Model\CSS\TakeCoverageDeltaResponse;
use ChromeDevtoolsProtocol\Model\CSS\TrackComputedStyleUpdatesRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain exposes CSS read/write operations. All CSS objects (stylesheets, rules, and styles) have an associated `id` used in subsequent operations on the related object. Each object type has a specific `id` structure, and those are not interchangeable between objects of different kinds. CSS objects can be loaded using the `get*ForNode()` calls (which accept a DOM node id). A client can also keep track of stylesheets via the `styleSheetAdded`/`styleSheetRemoved` events and subsequently load the required stylesheet contents using the `getStyleSheet[Text]()` methods.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface CSSDomainInterface
{
	/**
	 * Inserts a new rule with the given `ruleText` in a stylesheet with given `styleSheetId`, at the position specified by `location`.
	 *
	 * @param ContextInterface $ctx
	 * @param AddRuleRequest $request
	 *
	 * @return AddRuleResponse
	 */
	public function addRule(ContextInterface $ctx, AddRuleRequest $request): AddRuleResponse;


	/**
	 * Returns all class names from specified stylesheet.
	 *
	 * @param ContextInterface $ctx
	 * @param CollectClassNamesRequest $request
	 *
	 * @return CollectClassNamesResponse
	 */
	public function collectClassNames(ContextInterface $ctx, CollectClassNamesRequest $request): CollectClassNamesResponse;


	/**
	 * Creates a new special "via-inspector" stylesheet in the frame with given `frameId`.
	 *
	 * @param ContextInterface $ctx
	 * @param CreateStyleSheetRequest $request
	 *
	 * @return CreateStyleSheetResponse
	 */
	public function createStyleSheet(ContextInterface $ctx, CreateStyleSheetRequest $request): CreateStyleSheetResponse;


	/**
	 * Disables the CSS agent for the given page.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables the CSS agent for the given page. Clients should not assume that the CSS agent has been enabled until the result of this command is received.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Ensures that the given node will have specified pseudo-classes whenever its style is computed by the browser.
	 *
	 * @param ContextInterface $ctx
	 * @param ForcePseudoStateRequest $request
	 *
	 * @return void
	 */
	public function forcePseudoState(ContextInterface $ctx, ForcePseudoStateRequest $request): void;


	/**
	 * Call CSS.getBackgroundColors command.
	 *
	 * @param ContextInterface $ctx
	 * @param GetBackgroundColorsRequest $request
	 *
	 * @return GetBackgroundColorsResponse
	 */
	public function getBackgroundColors(
		ContextInterface $ctx,
		GetBackgroundColorsRequest $request
	): GetBackgroundColorsResponse;


	/**
	 * Returns the computed style for a DOM node identified by `nodeId`.
	 *
	 * @param ContextInterface $ctx
	 * @param GetComputedStyleForNodeRequest $request
	 *
	 * @return GetComputedStyleForNodeResponse
	 */
	public function getComputedStyleForNode(
		ContextInterface $ctx,
		GetComputedStyleForNodeRequest $request
	): GetComputedStyleForNodeResponse;


	/**
	 * Returns the styles defined inline (explicitly in the "style" attribute and implicitly, using DOM attributes) for a DOM node identified by `nodeId`.
	 *
	 * @param ContextInterface $ctx
	 * @param GetInlineStylesForNodeRequest $request
	 *
	 * @return GetInlineStylesForNodeResponse
	 */
	public function getInlineStylesForNode(
		ContextInterface $ctx,
		GetInlineStylesForNodeRequest $request
	): GetInlineStylesForNodeResponse;


	/**
	 * Returns all layers parsed by the rendering engine for the tree scope of a node. Given a DOM element identified by nodeId, getLayersForNode returns the root layer for the nearest ancestor document or shadow root. The layer root contains the full layer tree for the tree scope and their ordering.
	 *
	 * @param ContextInterface $ctx
	 * @param GetLayersForNodeRequest $request
	 *
	 * @return GetLayersForNodeResponse
	 */
	public function getLayersForNode(ContextInterface $ctx, GetLayersForNodeRequest $request): GetLayersForNodeResponse;


	/**
	 * Returns requested styles for a DOM node identified by `nodeId`.
	 *
	 * @param ContextInterface $ctx
	 * @param GetMatchedStylesForNodeRequest $request
	 *
	 * @return GetMatchedStylesForNodeResponse
	 */
	public function getMatchedStylesForNode(
		ContextInterface $ctx,
		GetMatchedStylesForNodeRequest $request
	): GetMatchedStylesForNodeResponse;


	/**
	 * Returns all media queries parsed by the rendering engine.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetMediaQueriesResponse
	 */
	public function getMediaQueries(ContextInterface $ctx): GetMediaQueriesResponse;


	/**
	 * Requests information about platform fonts which we used to render child TextNodes in the given node.
	 *
	 * @param ContextInterface $ctx
	 * @param GetPlatformFontsForNodeRequest $request
	 *
	 * @return GetPlatformFontsForNodeResponse
	 */
	public function getPlatformFontsForNode(
		ContextInterface $ctx,
		GetPlatformFontsForNodeRequest $request
	): GetPlatformFontsForNodeResponse;


	/**
	 * Returns the current textual content for a stylesheet.
	 *
	 * @param ContextInterface $ctx
	 * @param GetStyleSheetTextRequest $request
	 *
	 * @return GetStyleSheetTextResponse
	 */
	public function getStyleSheetText(ContextInterface $ctx, GetStyleSheetTextRequest $request): GetStyleSheetTextResponse;


	/**
	 * Modifies the expression of a container query.
	 *
	 * @param ContextInterface $ctx
	 * @param SetContainerQueryTextRequest $request
	 *
	 * @return SetContainerQueryTextResponse
	 */
	public function setContainerQueryText(
		ContextInterface $ctx,
		SetContainerQueryTextRequest $request
	): SetContainerQueryTextResponse;


	/**
	 * Find a rule with the given active property for the given node and set the new value for this property
	 *
	 * @param ContextInterface $ctx
	 * @param SetEffectivePropertyValueForNodeRequest $request
	 *
	 * @return void
	 */
	public function setEffectivePropertyValueForNode(
		ContextInterface $ctx,
		SetEffectivePropertyValueForNodeRequest $request
	): void;


	/**
	 * Modifies the keyframe rule key text.
	 *
	 * @param ContextInterface $ctx
	 * @param SetKeyframeKeyRequest $request
	 *
	 * @return SetKeyframeKeyResponse
	 */
	public function setKeyframeKey(ContextInterface $ctx, SetKeyframeKeyRequest $request): SetKeyframeKeyResponse;


	/**
	 * Enables/disables rendering of local CSS fonts (enabled by default).
	 *
	 * @param ContextInterface $ctx
	 * @param SetLocalFontsEnabledRequest $request
	 *
	 * @return void
	 */
	public function setLocalFontsEnabled(ContextInterface $ctx, SetLocalFontsEnabledRequest $request): void;


	/**
	 * Modifies the rule selector.
	 *
	 * @param ContextInterface $ctx
	 * @param SetMediaTextRequest $request
	 *
	 * @return SetMediaTextResponse
	 */
	public function setMediaText(ContextInterface $ctx, SetMediaTextRequest $request): SetMediaTextResponse;


	/**
	 * Modifies the rule selector.
	 *
	 * @param ContextInterface $ctx
	 * @param SetRuleSelectorRequest $request
	 *
	 * @return SetRuleSelectorResponse
	 */
	public function setRuleSelector(ContextInterface $ctx, SetRuleSelectorRequest $request): SetRuleSelectorResponse;


	/**
	 * Sets the new stylesheet text.
	 *
	 * @param ContextInterface $ctx
	 * @param SetStyleSheetTextRequest $request
	 *
	 * @return SetStyleSheetTextResponse
	 */
	public function setStyleSheetText(ContextInterface $ctx, SetStyleSheetTextRequest $request): SetStyleSheetTextResponse;


	/**
	 * Applies specified style edits one after another in the given order.
	 *
	 * @param ContextInterface $ctx
	 * @param SetStyleTextsRequest $request
	 *
	 * @return SetStyleTextsResponse
	 */
	public function setStyleTexts(ContextInterface $ctx, SetStyleTextsRequest $request): SetStyleTextsResponse;


	/**
	 * Modifies the expression of a supports at-rule.
	 *
	 * @param ContextInterface $ctx
	 * @param SetSupportsTextRequest $request
	 *
	 * @return SetSupportsTextResponse
	 */
	public function setSupportsText(ContextInterface $ctx, SetSupportsTextRequest $request): SetSupportsTextResponse;


	/**
	 * Enables the selector recording.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function startRuleUsageTracking(ContextInterface $ctx): void;


	/**
	 * Stop tracking rule usage and return the list of rules that were used since last call to `takeCoverageDelta` (or since start of coverage instrumentation)
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return StopRuleUsageTrackingResponse
	 */
	public function stopRuleUsageTracking(ContextInterface $ctx): StopRuleUsageTrackingResponse;


	/**
	 * Polls the next batch of computed style updates.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TakeComputedStyleUpdatesResponse
	 */
	public function takeComputedStyleUpdates(ContextInterface $ctx): TakeComputedStyleUpdatesResponse;


	/**
	 * Obtain list of rules that became used since last call to this method (or since start of coverage instrumentation)
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TakeCoverageDeltaResponse
	 */
	public function takeCoverageDelta(ContextInterface $ctx): TakeCoverageDeltaResponse;


	/**
	 * Starts tracking the given computed styles for updates. The specified array of properties replaces the one previously specified. Pass empty array to disable tracking. Use takeComputedStyleUpdates to retrieve the list of nodes that had properties modified. The changes to computed style properties are only tracked for nodes pushed to the front-end by the DOM agent. If no changes to the tracked properties occur after the node has been pushed to the front-end, no updates will be issued for the node.
	 *
	 * @param ContextInterface $ctx
	 * @param TrackComputedStyleUpdatesRequest $request
	 *
	 * @return void
	 */
	public function trackComputedStyleUpdates(ContextInterface $ctx, TrackComputedStyleUpdatesRequest $request): void;


	/**
	 * Fires whenever a web font is updated. A non-empty font parameter indicates a successfully loaded web font
	 *
	 * Listener will be called whenever event CSS.fontsUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFontsUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fires whenever a web font is updated. A non-empty font parameter indicates a successfully loaded web font
	 *
	 * Method will block until first CSS.fontsUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FontsUpdatedEvent
	 */
	public function awaitFontsUpdated(ContextInterface $ctx): FontsUpdatedEvent;


	/**
	 * Fires whenever a MediaQuery result changes (for example, after a browser window has been resized.) The current implementation considers only viewport-dependent media features.
	 *
	 * Listener will be called whenever event CSS.mediaQueryResultChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addMediaQueryResultChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fires whenever a MediaQuery result changes (for example, after a browser window has been resized.) The current implementation considers only viewport-dependent media features.
	 *
	 * Method will block until first CSS.mediaQueryResultChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return MediaQueryResultChangedEvent
	 */
	public function awaitMediaQueryResultChanged(ContextInterface $ctx): MediaQueryResultChangedEvent;


	/**
	 * Fired whenever an active document stylesheet is added.
	 *
	 * Listener will be called whenever event CSS.styleSheetAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addStyleSheetAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired whenever an active document stylesheet is added.
	 *
	 * Method will block until first CSS.styleSheetAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return StyleSheetAddedEvent
	 */
	public function awaitStyleSheetAdded(ContextInterface $ctx): StyleSheetAddedEvent;


	/**
	 * Fired whenever a stylesheet is changed as a result of the client operation.
	 *
	 * Listener will be called whenever event CSS.styleSheetChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addStyleSheetChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired whenever a stylesheet is changed as a result of the client operation.
	 *
	 * Method will block until first CSS.styleSheetChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return StyleSheetChangedEvent
	 */
	public function awaitStyleSheetChanged(ContextInterface $ctx): StyleSheetChangedEvent;


	/**
	 * Fired whenever an active document stylesheet is removed.
	 *
	 * Listener will be called whenever event CSS.styleSheetRemoved is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addStyleSheetRemovedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired whenever an active document stylesheet is removed.
	 *
	 * Method will block until first CSS.styleSheetRemoved event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return StyleSheetRemovedEvent
	 */
	public function awaitStyleSheetRemoved(ContextInterface $ctx): StyleSheetRemovedEvent;
}
