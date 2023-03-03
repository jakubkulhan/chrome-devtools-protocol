<?php

namespace ChromeDevtoolsProtocol;

use ChromeDevtoolsProtocol\Domain\AccessibilityDomainInterface;
use ChromeDevtoolsProtocol\Domain\AnimationDomainInterface;
use ChromeDevtoolsProtocol\Domain\AuditsDomainInterface;
use ChromeDevtoolsProtocol\Domain\BackgroundServiceDomainInterface;
use ChromeDevtoolsProtocol\Domain\BrowserDomainInterface;
use ChromeDevtoolsProtocol\Domain\CSSDomainInterface;
use ChromeDevtoolsProtocol\Domain\CacheStorageDomainInterface;
use ChromeDevtoolsProtocol\Domain\CastDomainInterface;
use ChromeDevtoolsProtocol\Domain\ConsoleDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMDebuggerDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMSnapshotDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMStorageDomainInterface;
use ChromeDevtoolsProtocol\Domain\DatabaseDomainInterface;
use ChromeDevtoolsProtocol\Domain\DebuggerDomainInterface;
use ChromeDevtoolsProtocol\Domain\DeviceAccessDomainInterface;
use ChromeDevtoolsProtocol\Domain\DeviceOrientationDomainInterface;
use ChromeDevtoolsProtocol\Domain\EmulationDomainInterface;
use ChromeDevtoolsProtocol\Domain\EventBreakpointsDomainInterface;
use ChromeDevtoolsProtocol\Domain\FedCmDomainInterface;
use ChromeDevtoolsProtocol\Domain\FetchDomainInterface;
use ChromeDevtoolsProtocol\Domain\HeadlessExperimentalDomainInterface;
use ChromeDevtoolsProtocol\Domain\HeapProfilerDomainInterface;
use ChromeDevtoolsProtocol\Domain\IODomainInterface;
use ChromeDevtoolsProtocol\Domain\IndexedDBDomainInterface;
use ChromeDevtoolsProtocol\Domain\InputDomainInterface;
use ChromeDevtoolsProtocol\Domain\InspectorDomainInterface;
use ChromeDevtoolsProtocol\Domain\LayerTreeDomainInterface;
use ChromeDevtoolsProtocol\Domain\LogDomainInterface;
use ChromeDevtoolsProtocol\Domain\MediaDomainInterface;
use ChromeDevtoolsProtocol\Domain\MemoryDomainInterface;
use ChromeDevtoolsProtocol\Domain\NetworkDomainInterface;
use ChromeDevtoolsProtocol\Domain\OverlayDomainInterface;
use ChromeDevtoolsProtocol\Domain\PageDomainInterface;
use ChromeDevtoolsProtocol\Domain\PerformanceDomainInterface;
use ChromeDevtoolsProtocol\Domain\PerformanceTimelineDomainInterface;
use ChromeDevtoolsProtocol\Domain\PreloadDomainInterface;
use ChromeDevtoolsProtocol\Domain\ProfilerDomainInterface;
use ChromeDevtoolsProtocol\Domain\RuntimeDomainInterface;
use ChromeDevtoolsProtocol\Domain\SchemaDomainInterface;
use ChromeDevtoolsProtocol\Domain\SecurityDomainInterface;
use ChromeDevtoolsProtocol\Domain\ServiceWorkerDomainInterface;
use ChromeDevtoolsProtocol\Domain\StorageDomainInterface;
use ChromeDevtoolsProtocol\Domain\SystemInfoDomainInterface;
use ChromeDevtoolsProtocol\Domain\TargetDomainInterface;
use ChromeDevtoolsProtocol\Domain\TetheringDomainInterface;
use ChromeDevtoolsProtocol\Domain\TracingDomainInterface;
use ChromeDevtoolsProtocol\Domain\WebAudioDomainInterface;
use ChromeDevtoolsProtocol\Domain\WebAuthnDomainInterface;

/**
 * Interface for Chrome devtools protocol client.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DevtoolsClientInterface extends CloseableResourceInterface
{
	/**
	 * Accessibility domain.
	 *
	 * @experimental
	 */
	public function accessibility(): AccessibilityDomainInterface;


	/**
	 * Animation domain.
	 *
	 * @experimental
	 */
	public function animation(): AnimationDomainInterface;


	/**
	 * Audits domain allows investigation of page violations and possible improvements.
	 *
	 * @experimental
	 */
	public function audits(): AuditsDomainInterface;


	/**
	 * Defines events for background web platform features.
	 *
	 * @experimental
	 */
	public function backgroundService(): BackgroundServiceDomainInterface;


	/**
	 * The Browser domain defines methods and events for browser managing.
	 */
	public function browser(): BrowserDomainInterface;


	/**
	 * CacheStorage domain.
	 *
	 * @experimental
	 */
	public function cacheStorage(): CacheStorageDomainInterface;


	/**
	 * A domain for interacting with Cast, Presentation API, and Remote Playback API functionalities.
	 *
	 * @experimental
	 */
	public function cast(): CastDomainInterface;


	/**
	 * This domain is deprecated - use Runtime or Log instead.
	 */
	public function console(): ConsoleDomainInterface;


	/**
	 * This domain exposes CSS read/write operations. All CSS objects (stylesheets, rules, and styles) have an associated `id` used in subsequent operations on the related object. Each object type has a specific `id` structure, and those are not interchangeable between objects of different kinds. CSS objects can be loaded using the `get*ForNode()` calls (which accept a DOM node id). A client can also keep track of stylesheets via the `styleSheetAdded`/`styleSheetRemoved` events and subsequently load the required stylesheet contents using the `getStyleSheet[Text]()` methods.
	 *
	 * @experimental
	 */
	public function css(): CSSDomainInterface;


	/**
	 * Database domain.
	 *
	 * @experimental
	 */
	public function database(): DatabaseDomainInterface;


	/**
	 * Debugger domain exposes JavaScript debugging capabilities. It allows setting and removing breakpoints, stepping through execution, exploring stack traces, etc.
	 */
	public function debugger(): DebuggerDomainInterface;


	/**
	 * DeviceAccess domain.
	 *
	 * @experimental
	 */
	public function deviceAccess(): DeviceAccessDomainInterface;


	/**
	 * DeviceOrientation domain.
	 *
	 * @experimental
	 */
	public function deviceOrientation(): DeviceOrientationDomainInterface;


	/**
	 * This domain exposes DOM read/write operations. Each DOM Node is represented with its mirror object that has an `id`. This `id` can be used to get additional information on the Node, resolve it into the JavaScript object wrapper, etc. It is important that client receives DOM events only for the nodes that are known to the client. Backend keeps track of the nodes that were sent to the client and never sends the same node twice. It is client's responsibility to collect information about the nodes that were sent to the client.<p>Note that `iframe` owner elements will return corresponding document elements as their child nodes.</p>
	 */
	public function dom(): DOMDomainInterface;


	/**
	 * DOM debugging allows setting breakpoints on particular DOM operations and events. JavaScript execution will stop on these operations as if there was a regular breakpoint set.
	 */
	public function domDebugger(): DOMDebuggerDomainInterface;


	/**
	 * This domain facilitates obtaining document snapshots with DOM, layout, and style information.
	 *
	 * @experimental
	 */
	public function domSnapshot(): DOMSnapshotDomainInterface;


	/**
	 * Query and modify DOM storage.
	 *
	 * @experimental
	 */
	public function domStorage(): DOMStorageDomainInterface;


	/**
	 * This domain emulates different environments for the page.
	 */
	public function emulation(): EmulationDomainInterface;


	/**
	 * EventBreakpoints permits setting breakpoints on particular operations and events in targets that run JavaScript but do not have a DOM. JavaScript execution will stop on these operations as if there was a regular breakpoint set.
	 *
	 * @experimental
	 */
	public function eventBreakpoints(): EventBreakpointsDomainInterface;


	/**
	 * This domain allows interacting with the FedCM dialog.
	 *
	 * @experimental
	 */
	public function fedCm(): FedCmDomainInterface;


	/**
	 * A domain for letting clients substitute browser's network layer with client code.
	 */
	public function fetch(): FetchDomainInterface;


	/**
	 * This domain provides experimental commands only supported in headless mode.
	 *
	 * @experimental
	 */
	public function headlessExperimental(): HeadlessExperimentalDomainInterface;


	/**
	 * HeapProfiler domain.
	 *
	 * @experimental
	 */
	public function heapProfiler(): HeapProfilerDomainInterface;


	/**
	 * IndexedDB domain.
	 *
	 * @experimental
	 */
	public function indexedDB(): IndexedDBDomainInterface;


	/**
	 * Input domain.
	 */
	public function input(): InputDomainInterface;


	/**
	 * Inspector domain.
	 *
	 * @experimental
	 */
	public function inspector(): InspectorDomainInterface;


	/**
	 * Input/Output operations for streams produced by DevTools.
	 */
	public function io(): IODomainInterface;


	/**
	 * LayerTree domain.
	 *
	 * @experimental
	 */
	public function layerTree(): LayerTreeDomainInterface;


	/**
	 * Provides access to log entries.
	 */
	public function log(): LogDomainInterface;


	/**
	 * This domain allows detailed inspection of media elements
	 *
	 * @experimental
	 */
	public function media(): MediaDomainInterface;


	/**
	 * Memory domain.
	 *
	 * @experimental
	 */
	public function memory(): MemoryDomainInterface;


	/**
	 * Network domain allows tracking network activities of the page. It exposes information about http, file, data and other requests and responses, their headers, bodies, timing, etc.
	 */
	public function network(): NetworkDomainInterface;


	/**
	 * This domain provides various functionality related to drawing atop the inspected page.
	 *
	 * @experimental
	 */
	public function overlay(): OverlayDomainInterface;


	/**
	 * Actions and events related to the inspected page belong to the page domain.
	 */
	public function page(): PageDomainInterface;


	/**
	 * Performance domain.
	 */
	public function performance(): PerformanceDomainInterface;


	/**
	 * Reporting of performance timeline events, as specified in https://w3c.github.io/performance-timeline/#dom-performanceobserver.
	 *
	 * @experimental
	 */
	public function performanceTimeline(): PerformanceTimelineDomainInterface;


	/**
	 * Preload domain.
	 *
	 * @experimental
	 */
	public function preload(): PreloadDomainInterface;


	/**
	 * Profiler domain.
	 */
	public function profiler(): ProfilerDomainInterface;


	/**
	 * Runtime domain exposes JavaScript runtime by means of remote evaluation and mirror objects. Evaluation results are returned as mirror object that expose object type, string representation and unique identifier that can be used for further object reference. Original objects are maintained in memory unless they are either explicitly released or are released along with the other objects in their object group.
	 */
	public function runtime(): RuntimeDomainInterface;


	/**
	 * This domain is deprecated.
	 */
	public function schema(): SchemaDomainInterface;


	/**
	 * Security
	 */
	public function security(): SecurityDomainInterface;


	/**
	 * ServiceWorker domain.
	 *
	 * @experimental
	 */
	public function serviceWorker(): ServiceWorkerDomainInterface;


	/**
	 * Storage domain.
	 *
	 * @experimental
	 */
	public function storage(): StorageDomainInterface;


	/**
	 * The SystemInfo domain defines methods and events for querying low-level system information.
	 *
	 * @experimental
	 */
	public function systemInfo(): SystemInfoDomainInterface;


	/**
	 * Supports additional targets discovery and allows to attach to them.
	 */
	public function target(): TargetDomainInterface;


	/**
	 * The Tethering domain defines methods and events for browser port binding.
	 *
	 * @experimental
	 */
	public function tethering(): TetheringDomainInterface;


	/**
	 * Tracing domain.
	 *
	 * @experimental
	 */
	public function tracing(): TracingDomainInterface;


	/**
	 * This domain allows inspection of Web Audio API. https://webaudio.github.io/web-audio-api/
	 *
	 * @experimental
	 */
	public function webAudio(): WebAudioDomainInterface;


	/**
	 * This domain allows configuring virtual authenticators to test the WebAuthn API.
	 *
	 * @experimental
	 */
	public function webAuthn(): WebAuthnDomainInterface;
}
