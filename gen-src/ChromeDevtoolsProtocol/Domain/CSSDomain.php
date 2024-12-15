<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\CSS\AddRuleRequest;
use ChromeDevtoolsProtocol\Model\CSS\AddRuleResponse;
use ChromeDevtoolsProtocol\Model\CSS\CollectClassNamesRequest;
use ChromeDevtoolsProtocol\Model\CSS\CollectClassNamesResponse;
use ChromeDevtoolsProtocol\Model\CSS\ComputedStyleUpdatedEvent;
use ChromeDevtoolsProtocol\Model\CSS\CreateStyleSheetRequest;
use ChromeDevtoolsProtocol\Model\CSS\CreateStyleSheetResponse;
use ChromeDevtoolsProtocol\Model\CSS\FontsUpdatedEvent;
use ChromeDevtoolsProtocol\Model\CSS\ForcePseudoStateRequest;
use ChromeDevtoolsProtocol\Model\CSS\ForceStartingStyleRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetAnimatedStylesForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetAnimatedStylesForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetBackgroundColorsRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetBackgroundColorsResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetComputedStyleForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetComputedStyleForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetInlineStylesForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetInlineStylesForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetLayersForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetLayersForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetLocationForSelectorRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetLocationForSelectorResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetMatchedStylesForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetMatchedStylesForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetMediaQueriesResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetPlatformFontsForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetPlatformFontsForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetStyleSheetTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetStyleSheetTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\MediaQueryResultChangedEvent;
use ChromeDevtoolsProtocol\Model\CSS\ResolveValuesRequest;
use ChromeDevtoolsProtocol\Model\CSS\ResolveValuesResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetContainerQueryTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetContainerQueryTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetEffectivePropertyValueForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetKeyframeKeyRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetKeyframeKeyResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetLocalFontsEnabledRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetMediaTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetMediaTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetPropertyRulePropertyNameRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetPropertyRulePropertyNameResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetRuleSelectorRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetRuleSelectorResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetScopeTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetScopeTextResponse;
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
use ChromeDevtoolsProtocol\Model\CSS\TrackComputedStyleUpdatesForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\TrackComputedStyleUpdatesRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class CSSDomain implements CSSDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function addRule(ContextInterface $ctx, AddRuleRequest $request): AddRuleResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.addRule', $request);
		return AddRuleResponse::fromJson($response);
	}


	public function collectClassNames(ContextInterface $ctx, CollectClassNamesRequest $request): CollectClassNamesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.collectClassNames', $request);
		return CollectClassNamesResponse::fromJson($response);
	}


	public function createStyleSheet(ContextInterface $ctx, CreateStyleSheetRequest $request): CreateStyleSheetResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.createStyleSheet', $request);
		return CreateStyleSheetResponse::fromJson($response);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'CSS.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'CSS.enable', $request);
	}


	public function forcePseudoState(ContextInterface $ctx, ForcePseudoStateRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'CSS.forcePseudoState', $request);
	}


	public function forceStartingStyle(ContextInterface $ctx, ForceStartingStyleRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'CSS.forceStartingStyle', $request);
	}


	public function getAnimatedStylesForNode(
		ContextInterface $ctx,
		GetAnimatedStylesForNodeRequest $request
	): GetAnimatedStylesForNodeResponse {
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getAnimatedStylesForNode', $request);
		return GetAnimatedStylesForNodeResponse::fromJson($response);
	}


	public function getBackgroundColors(
		ContextInterface $ctx,
		GetBackgroundColorsRequest $request
	): GetBackgroundColorsResponse {
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getBackgroundColors', $request);
		return GetBackgroundColorsResponse::fromJson($response);
	}


	public function getComputedStyleForNode(
		ContextInterface $ctx,
		GetComputedStyleForNodeRequest $request
	): GetComputedStyleForNodeResponse {
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getComputedStyleForNode', $request);
		return GetComputedStyleForNodeResponse::fromJson($response);
	}


	public function getInlineStylesForNode(
		ContextInterface $ctx,
		GetInlineStylesForNodeRequest $request
	): GetInlineStylesForNodeResponse {
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getInlineStylesForNode', $request);
		return GetInlineStylesForNodeResponse::fromJson($response);
	}


	public function getLayersForNode(ContextInterface $ctx, GetLayersForNodeRequest $request): GetLayersForNodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getLayersForNode', $request);
		return GetLayersForNodeResponse::fromJson($response);
	}


	public function getLocationForSelector(
		ContextInterface $ctx,
		GetLocationForSelectorRequest $request
	): GetLocationForSelectorResponse {
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getLocationForSelector', $request);
		return GetLocationForSelectorResponse::fromJson($response);
	}


	public function getMatchedStylesForNode(
		ContextInterface $ctx,
		GetMatchedStylesForNodeRequest $request
	): GetMatchedStylesForNodeResponse {
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getMatchedStylesForNode', $request);
		return GetMatchedStylesForNodeResponse::fromJson($response);
	}


	public function getMediaQueries(ContextInterface $ctx): GetMediaQueriesResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getMediaQueries', $request);
		return GetMediaQueriesResponse::fromJson($response);
	}


	public function getPlatformFontsForNode(
		ContextInterface $ctx,
		GetPlatformFontsForNodeRequest $request
	): GetPlatformFontsForNodeResponse {
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getPlatformFontsForNode', $request);
		return GetPlatformFontsForNodeResponse::fromJson($response);
	}


	public function getStyleSheetText(ContextInterface $ctx, GetStyleSheetTextRequest $request): GetStyleSheetTextResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getStyleSheetText', $request);
		return GetStyleSheetTextResponse::fromJson($response);
	}


	public function resolveValues(ContextInterface $ctx, ResolveValuesRequest $request): ResolveValuesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.resolveValues', $request);
		return ResolveValuesResponse::fromJson($response);
	}


	public function setContainerQueryText(
		ContextInterface $ctx,
		SetContainerQueryTextRequest $request
	): SetContainerQueryTextResponse {
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setContainerQueryText', $request);
		return SetContainerQueryTextResponse::fromJson($response);
	}


	public function setEffectivePropertyValueForNode(
		ContextInterface $ctx,
		SetEffectivePropertyValueForNodeRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'CSS.setEffectivePropertyValueForNode', $request);
	}


	public function setKeyframeKey(ContextInterface $ctx, SetKeyframeKeyRequest $request): SetKeyframeKeyResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setKeyframeKey', $request);
		return SetKeyframeKeyResponse::fromJson($response);
	}


	public function setLocalFontsEnabled(ContextInterface $ctx, SetLocalFontsEnabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'CSS.setLocalFontsEnabled', $request);
	}


	public function setMediaText(ContextInterface $ctx, SetMediaTextRequest $request): SetMediaTextResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setMediaText', $request);
		return SetMediaTextResponse::fromJson($response);
	}


	public function setPropertyRulePropertyName(
		ContextInterface $ctx,
		SetPropertyRulePropertyNameRequest $request
	): SetPropertyRulePropertyNameResponse {
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setPropertyRulePropertyName', $request);
		return SetPropertyRulePropertyNameResponse::fromJson($response);
	}


	public function setRuleSelector(ContextInterface $ctx, SetRuleSelectorRequest $request): SetRuleSelectorResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setRuleSelector', $request);
		return SetRuleSelectorResponse::fromJson($response);
	}


	public function setScopeText(ContextInterface $ctx, SetScopeTextRequest $request): SetScopeTextResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setScopeText', $request);
		return SetScopeTextResponse::fromJson($response);
	}


	public function setStyleSheetText(ContextInterface $ctx, SetStyleSheetTextRequest $request): SetStyleSheetTextResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setStyleSheetText', $request);
		return SetStyleSheetTextResponse::fromJson($response);
	}


	public function setStyleTexts(ContextInterface $ctx, SetStyleTextsRequest $request): SetStyleTextsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setStyleTexts', $request);
		return SetStyleTextsResponse::fromJson($response);
	}


	public function setSupportsText(ContextInterface $ctx, SetSupportsTextRequest $request): SetSupportsTextResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setSupportsText', $request);
		return SetSupportsTextResponse::fromJson($response);
	}


	public function startRuleUsageTracking(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'CSS.startRuleUsageTracking', $request);
	}


	public function stopRuleUsageTracking(ContextInterface $ctx): StopRuleUsageTrackingResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'CSS.stopRuleUsageTracking', $request);
		return StopRuleUsageTrackingResponse::fromJson($response);
	}


	public function takeComputedStyleUpdates(ContextInterface $ctx): TakeComputedStyleUpdatesResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'CSS.takeComputedStyleUpdates', $request);
		return TakeComputedStyleUpdatesResponse::fromJson($response);
	}


	public function takeCoverageDelta(ContextInterface $ctx): TakeCoverageDeltaResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'CSS.takeCoverageDelta', $request);
		return TakeCoverageDeltaResponse::fromJson($response);
	}


	public function trackComputedStyleUpdates(ContextInterface $ctx, TrackComputedStyleUpdatesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'CSS.trackComputedStyleUpdates', $request);
	}


	public function trackComputedStyleUpdatesForNode(
		ContextInterface $ctx,
		TrackComputedStyleUpdatesForNodeRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'CSS.trackComputedStyleUpdatesForNode', $request);
	}


	public function addComputedStyleUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.computedStyleUpdated', function ($event) use ($listener) {
			return $listener(ComputedStyleUpdatedEvent::fromJson($event));
		});
	}


	public function awaitComputedStyleUpdated(ContextInterface $ctx): ComputedStyleUpdatedEvent
	{
		return ComputedStyleUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.computedStyleUpdated'));
	}


	public function addFontsUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.fontsUpdated', function ($event) use ($listener) {
			return $listener(FontsUpdatedEvent::fromJson($event));
		});
	}


	public function awaitFontsUpdated(ContextInterface $ctx): FontsUpdatedEvent
	{
		return FontsUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.fontsUpdated'));
	}


	public function addMediaQueryResultChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.mediaQueryResultChanged', function ($event) use ($listener) {
			return $listener(MediaQueryResultChangedEvent::fromJson($event));
		});
	}


	public function awaitMediaQueryResultChanged(ContextInterface $ctx): MediaQueryResultChangedEvent
	{
		return MediaQueryResultChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.mediaQueryResultChanged'));
	}


	public function addStyleSheetAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.styleSheetAdded', function ($event) use ($listener) {
			return $listener(StyleSheetAddedEvent::fromJson($event));
		});
	}


	public function awaitStyleSheetAdded(ContextInterface $ctx): StyleSheetAddedEvent
	{
		return StyleSheetAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.styleSheetAdded'));
	}


	public function addStyleSheetChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.styleSheetChanged', function ($event) use ($listener) {
			return $listener(StyleSheetChangedEvent::fromJson($event));
		});
	}


	public function awaitStyleSheetChanged(ContextInterface $ctx): StyleSheetChangedEvent
	{
		return StyleSheetChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.styleSheetChanged'));
	}


	public function addStyleSheetRemovedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.styleSheetRemoved', function ($event) use ($listener) {
			return $listener(StyleSheetRemovedEvent::fromJson($event));
		});
	}


	public function awaitStyleSheetRemoved(ContextInterface $ctx): StyleSheetRemovedEvent
	{
		return StyleSheetRemovedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.styleSheetRemoved'));
	}
}
