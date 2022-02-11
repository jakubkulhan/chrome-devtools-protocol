<?php

namespace ChromeDevtoolsProtocol;

use ChromeDevtoolsProtocol\Domain\AccessibilityDomain;
use ChromeDevtoolsProtocol\Domain\AccessibilityDomainInterface;
use ChromeDevtoolsProtocol\Domain\AnimationDomain;
use ChromeDevtoolsProtocol\Domain\AnimationDomainInterface;
use ChromeDevtoolsProtocol\Domain\AuditsDomain;
use ChromeDevtoolsProtocol\Domain\AuditsDomainInterface;
use ChromeDevtoolsProtocol\Domain\BackgroundServiceDomain;
use ChromeDevtoolsProtocol\Domain\BackgroundServiceDomainInterface;
use ChromeDevtoolsProtocol\Domain\BrowserDomain;
use ChromeDevtoolsProtocol\Domain\BrowserDomainInterface;
use ChromeDevtoolsProtocol\Domain\CSSDomain;
use ChromeDevtoolsProtocol\Domain\CSSDomainInterface;
use ChromeDevtoolsProtocol\Domain\CacheStorageDomain;
use ChromeDevtoolsProtocol\Domain\CacheStorageDomainInterface;
use ChromeDevtoolsProtocol\Domain\CastDomain;
use ChromeDevtoolsProtocol\Domain\CastDomainInterface;
use ChromeDevtoolsProtocol\Domain\ConsoleDomain;
use ChromeDevtoolsProtocol\Domain\ConsoleDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMDebuggerDomain;
use ChromeDevtoolsProtocol\Domain\DOMDebuggerDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMDomain;
use ChromeDevtoolsProtocol\Domain\DOMDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMSnapshotDomain;
use ChromeDevtoolsProtocol\Domain\DOMSnapshotDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMStorageDomain;
use ChromeDevtoolsProtocol\Domain\DOMStorageDomainInterface;
use ChromeDevtoolsProtocol\Domain\DatabaseDomain;
use ChromeDevtoolsProtocol\Domain\DatabaseDomainInterface;
use ChromeDevtoolsProtocol\Domain\DebuggerDomain;
use ChromeDevtoolsProtocol\Domain\DebuggerDomainInterface;
use ChromeDevtoolsProtocol\Domain\DeviceOrientationDomain;
use ChromeDevtoolsProtocol\Domain\DeviceOrientationDomainInterface;
use ChromeDevtoolsProtocol\Domain\EmulationDomain;
use ChromeDevtoolsProtocol\Domain\EmulationDomainInterface;
use ChromeDevtoolsProtocol\Domain\EventBreakpointsDomain;
use ChromeDevtoolsProtocol\Domain\EventBreakpointsDomainInterface;
use ChromeDevtoolsProtocol\Domain\FetchDomain;
use ChromeDevtoolsProtocol\Domain\FetchDomainInterface;
use ChromeDevtoolsProtocol\Domain\HeadlessExperimentalDomain;
use ChromeDevtoolsProtocol\Domain\HeadlessExperimentalDomainInterface;
use ChromeDevtoolsProtocol\Domain\HeapProfilerDomain;
use ChromeDevtoolsProtocol\Domain\HeapProfilerDomainInterface;
use ChromeDevtoolsProtocol\Domain\IODomain;
use ChromeDevtoolsProtocol\Domain\IODomainInterface;
use ChromeDevtoolsProtocol\Domain\IndexedDBDomain;
use ChromeDevtoolsProtocol\Domain\IndexedDBDomainInterface;
use ChromeDevtoolsProtocol\Domain\InputDomain;
use ChromeDevtoolsProtocol\Domain\InputDomainInterface;
use ChromeDevtoolsProtocol\Domain\InspectorDomain;
use ChromeDevtoolsProtocol\Domain\InspectorDomainInterface;
use ChromeDevtoolsProtocol\Domain\LayerTreeDomain;
use ChromeDevtoolsProtocol\Domain\LayerTreeDomainInterface;
use ChromeDevtoolsProtocol\Domain\LogDomain;
use ChromeDevtoolsProtocol\Domain\LogDomainInterface;
use ChromeDevtoolsProtocol\Domain\MediaDomain;
use ChromeDevtoolsProtocol\Domain\MediaDomainInterface;
use ChromeDevtoolsProtocol\Domain\MemoryDomain;
use ChromeDevtoolsProtocol\Domain\MemoryDomainInterface;
use ChromeDevtoolsProtocol\Domain\NetworkDomain;
use ChromeDevtoolsProtocol\Domain\NetworkDomainInterface;
use ChromeDevtoolsProtocol\Domain\OverlayDomain;
use ChromeDevtoolsProtocol\Domain\OverlayDomainInterface;
use ChromeDevtoolsProtocol\Domain\PageDomain;
use ChromeDevtoolsProtocol\Domain\PageDomainInterface;
use ChromeDevtoolsProtocol\Domain\PerformanceDomain;
use ChromeDevtoolsProtocol\Domain\PerformanceDomainInterface;
use ChromeDevtoolsProtocol\Domain\PerformanceTimelineDomain;
use ChromeDevtoolsProtocol\Domain\PerformanceTimelineDomainInterface;
use ChromeDevtoolsProtocol\Domain\ProfilerDomain;
use ChromeDevtoolsProtocol\Domain\ProfilerDomainInterface;
use ChromeDevtoolsProtocol\Domain\RuntimeDomain;
use ChromeDevtoolsProtocol\Domain\RuntimeDomainInterface;
use ChromeDevtoolsProtocol\Domain\SchemaDomain;
use ChromeDevtoolsProtocol\Domain\SchemaDomainInterface;
use ChromeDevtoolsProtocol\Domain\SecurityDomain;
use ChromeDevtoolsProtocol\Domain\SecurityDomainInterface;
use ChromeDevtoolsProtocol\Domain\ServiceWorkerDomain;
use ChromeDevtoolsProtocol\Domain\ServiceWorkerDomainInterface;
use ChromeDevtoolsProtocol\Domain\StorageDomain;
use ChromeDevtoolsProtocol\Domain\StorageDomainInterface;
use ChromeDevtoolsProtocol\Domain\SystemInfoDomain;
use ChromeDevtoolsProtocol\Domain\SystemInfoDomainInterface;
use ChromeDevtoolsProtocol\Domain\TargetDomain;
use ChromeDevtoolsProtocol\Domain\TargetDomainInterface;
use ChromeDevtoolsProtocol\Domain\TetheringDomain;
use ChromeDevtoolsProtocol\Domain\TetheringDomainInterface;
use ChromeDevtoolsProtocol\Domain\TracingDomain;
use ChromeDevtoolsProtocol\Domain\TracingDomainInterface;
use ChromeDevtoolsProtocol\Domain\WebAudioDomain;
use ChromeDevtoolsProtocol\Domain\WebAudioDomainInterface;
use ChromeDevtoolsProtocol\Domain\WebAuthnDomain;
use ChromeDevtoolsProtocol\Domain\WebAuthnDomainInterface;

trait DevtoolsClientTrait
{
	/** @var object[] */
	private $domains = [];


	public function accessibility(): AccessibilityDomainInterface
	{
		if (!isset($this->domains['Accessibility'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Accessibility'] = new AccessibilityDomain($this);
		}
		/** @var AccessibilityDomainInterface $domain */
		$domain = $this->domains['Accessibility'];
		return $domain;
	}


	public function animation(): AnimationDomainInterface
	{
		if (!isset($this->domains['Animation'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Animation'] = new AnimationDomain($this);
		}
		/** @var AnimationDomainInterface $domain */
		$domain = $this->domains['Animation'];
		return $domain;
	}


	public function audits(): AuditsDomainInterface
	{
		if (!isset($this->domains['Audits'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Audits'] = new AuditsDomain($this);
		}
		/** @var AuditsDomainInterface $domain */
		$domain = $this->domains['Audits'];
		return $domain;
	}


	public function backgroundService(): BackgroundServiceDomainInterface
	{
		if (!isset($this->domains['BackgroundService'])) {
			/** @var InternalClientInterface $this */
			$this->domains['BackgroundService'] = new BackgroundServiceDomain($this);
		}
		/** @var BackgroundServiceDomainInterface $domain */
		$domain = $this->domains['BackgroundService'];
		return $domain;
	}


	public function browser(): BrowserDomainInterface
	{
		if (!isset($this->domains['Browser'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Browser'] = new BrowserDomain($this);
		}
		/** @var BrowserDomainInterface $domain */
		$domain = $this->domains['Browser'];
		return $domain;
	}


	public function cacheStorage(): CacheStorageDomainInterface
	{
		if (!isset($this->domains['CacheStorage'])) {
			/** @var InternalClientInterface $this */
			$this->domains['CacheStorage'] = new CacheStorageDomain($this);
		}
		/** @var CacheStorageDomainInterface $domain */
		$domain = $this->domains['CacheStorage'];
		return $domain;
	}


	public function cast(): CastDomainInterface
	{
		if (!isset($this->domains['Cast'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Cast'] = new CastDomain($this);
		}
		/** @var CastDomainInterface $domain */
		$domain = $this->domains['Cast'];
		return $domain;
	}


	public function console(): ConsoleDomainInterface
	{
		if (!isset($this->domains['Console'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Console'] = new ConsoleDomain($this);
		}
		/** @var ConsoleDomainInterface $domain */
		$domain = $this->domains['Console'];
		return $domain;
	}


	public function css(): CSSDomainInterface
	{
		if (!isset($this->domains['CSS'])) {
			/** @var InternalClientInterface $this */
			$this->domains['CSS'] = new CSSDomain($this);
		}
		/** @var CSSDomainInterface $domain */
		$domain = $this->domains['CSS'];
		return $domain;
	}


	public function database(): DatabaseDomainInterface
	{
		if (!isset($this->domains['Database'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Database'] = new DatabaseDomain($this);
		}
		/** @var DatabaseDomainInterface $domain */
		$domain = $this->domains['Database'];
		return $domain;
	}


	public function debugger(): DebuggerDomainInterface
	{
		if (!isset($this->domains['Debugger'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Debugger'] = new DebuggerDomain($this);
		}
		/** @var DebuggerDomainInterface $domain */
		$domain = $this->domains['Debugger'];
		return $domain;
	}


	public function deviceOrientation(): DeviceOrientationDomainInterface
	{
		if (!isset($this->domains['DeviceOrientation'])) {
			/** @var InternalClientInterface $this */
			$this->domains['DeviceOrientation'] = new DeviceOrientationDomain($this);
		}
		/** @var DeviceOrientationDomainInterface $domain */
		$domain = $this->domains['DeviceOrientation'];
		return $domain;
	}


	public function dom(): DOMDomainInterface
	{
		if (!isset($this->domains['DOM'])) {
			/** @var InternalClientInterface $this */
			$this->domains['DOM'] = new DOMDomain($this);
		}
		/** @var DOMDomainInterface $domain */
		$domain = $this->domains['DOM'];
		return $domain;
	}


	public function domDebugger(): DOMDebuggerDomainInterface
	{
		if (!isset($this->domains['DOMDebugger'])) {
			/** @var InternalClientInterface $this */
			$this->domains['DOMDebugger'] = new DOMDebuggerDomain($this);
		}
		/** @var DOMDebuggerDomainInterface $domain */
		$domain = $this->domains['DOMDebugger'];
		return $domain;
	}


	public function domSnapshot(): DOMSnapshotDomainInterface
	{
		if (!isset($this->domains['DOMSnapshot'])) {
			/** @var InternalClientInterface $this */
			$this->domains['DOMSnapshot'] = new DOMSnapshotDomain($this);
		}
		/** @var DOMSnapshotDomainInterface $domain */
		$domain = $this->domains['DOMSnapshot'];
		return $domain;
	}


	public function domStorage(): DOMStorageDomainInterface
	{
		if (!isset($this->domains['DOMStorage'])) {
			/** @var InternalClientInterface $this */
			$this->domains['DOMStorage'] = new DOMStorageDomain($this);
		}
		/** @var DOMStorageDomainInterface $domain */
		$domain = $this->domains['DOMStorage'];
		return $domain;
	}


	public function emulation(): EmulationDomainInterface
	{
		if (!isset($this->domains['Emulation'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Emulation'] = new EmulationDomain($this);
		}
		/** @var EmulationDomainInterface $domain */
		$domain = $this->domains['Emulation'];
		return $domain;
	}


	public function eventBreakpoints(): EventBreakpointsDomainInterface
	{
		if (!isset($this->domains['EventBreakpoints'])) {
			/** @var InternalClientInterface $this */
			$this->domains['EventBreakpoints'] = new EventBreakpointsDomain($this);
		}
		/** @var EventBreakpointsDomainInterface $domain */
		$domain = $this->domains['EventBreakpoints'];
		return $domain;
	}


	public function fetch(): FetchDomainInterface
	{
		if (!isset($this->domains['Fetch'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Fetch'] = new FetchDomain($this);
		}
		/** @var FetchDomainInterface $domain */
		$domain = $this->domains['Fetch'];
		return $domain;
	}


	public function headlessExperimental(): HeadlessExperimentalDomainInterface
	{
		if (!isset($this->domains['HeadlessExperimental'])) {
			/** @var InternalClientInterface $this */
			$this->domains['HeadlessExperimental'] = new HeadlessExperimentalDomain($this);
		}
		/** @var HeadlessExperimentalDomainInterface $domain */
		$domain = $this->domains['HeadlessExperimental'];
		return $domain;
	}


	public function heapProfiler(): HeapProfilerDomainInterface
	{
		if (!isset($this->domains['HeapProfiler'])) {
			/** @var InternalClientInterface $this */
			$this->domains['HeapProfiler'] = new HeapProfilerDomain($this);
		}
		/** @var HeapProfilerDomainInterface $domain */
		$domain = $this->domains['HeapProfiler'];
		return $domain;
	}


	public function indexedDB(): IndexedDBDomainInterface
	{
		if (!isset($this->domains['IndexedDB'])) {
			/** @var InternalClientInterface $this */
			$this->domains['IndexedDB'] = new IndexedDBDomain($this);
		}
		/** @var IndexedDBDomainInterface $domain */
		$domain = $this->domains['IndexedDB'];
		return $domain;
	}


	public function input(): InputDomainInterface
	{
		if (!isset($this->domains['Input'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Input'] = new InputDomain($this);
		}
		/** @var InputDomainInterface $domain */
		$domain = $this->domains['Input'];
		return $domain;
	}


	public function inspector(): InspectorDomainInterface
	{
		if (!isset($this->domains['Inspector'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Inspector'] = new InspectorDomain($this);
		}
		/** @var InspectorDomainInterface $domain */
		$domain = $this->domains['Inspector'];
		return $domain;
	}


	public function io(): IODomainInterface
	{
		if (!isset($this->domains['IO'])) {
			/** @var InternalClientInterface $this */
			$this->domains['IO'] = new IODomain($this);
		}
		/** @var IODomainInterface $domain */
		$domain = $this->domains['IO'];
		return $domain;
	}


	public function layerTree(): LayerTreeDomainInterface
	{
		if (!isset($this->domains['LayerTree'])) {
			/** @var InternalClientInterface $this */
			$this->domains['LayerTree'] = new LayerTreeDomain($this);
		}
		/** @var LayerTreeDomainInterface $domain */
		$domain = $this->domains['LayerTree'];
		return $domain;
	}


	public function log(): LogDomainInterface
	{
		if (!isset($this->domains['Log'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Log'] = new LogDomain($this);
		}
		/** @var LogDomainInterface $domain */
		$domain = $this->domains['Log'];
		return $domain;
	}


	public function media(): MediaDomainInterface
	{
		if (!isset($this->domains['Media'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Media'] = new MediaDomain($this);
		}
		/** @var MediaDomainInterface $domain */
		$domain = $this->domains['Media'];
		return $domain;
	}


	public function memory(): MemoryDomainInterface
	{
		if (!isset($this->domains['Memory'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Memory'] = new MemoryDomain($this);
		}
		/** @var MemoryDomainInterface $domain */
		$domain = $this->domains['Memory'];
		return $domain;
	}


	public function network(): NetworkDomainInterface
	{
		if (!isset($this->domains['Network'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Network'] = new NetworkDomain($this);
		}
		/** @var NetworkDomainInterface $domain */
		$domain = $this->domains['Network'];
		return $domain;
	}


	public function overlay(): OverlayDomainInterface
	{
		if (!isset($this->domains['Overlay'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Overlay'] = new OverlayDomain($this);
		}
		/** @var OverlayDomainInterface $domain */
		$domain = $this->domains['Overlay'];
		return $domain;
	}


	public function page(): PageDomainInterface
	{
		if (!isset($this->domains['Page'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Page'] = new PageDomain($this);
		}
		/** @var PageDomainInterface $domain */
		$domain = $this->domains['Page'];
		return $domain;
	}


	public function performance(): PerformanceDomainInterface
	{
		if (!isset($this->domains['Performance'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Performance'] = new PerformanceDomain($this);
		}
		/** @var PerformanceDomainInterface $domain */
		$domain = $this->domains['Performance'];
		return $domain;
	}


	public function performanceTimeline(): PerformanceTimelineDomainInterface
	{
		if (!isset($this->domains['PerformanceTimeline'])) {
			/** @var InternalClientInterface $this */
			$this->domains['PerformanceTimeline'] = new PerformanceTimelineDomain($this);
		}
		/** @var PerformanceTimelineDomainInterface $domain */
		$domain = $this->domains['PerformanceTimeline'];
		return $domain;
	}


	public function profiler(): ProfilerDomainInterface
	{
		if (!isset($this->domains['Profiler'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Profiler'] = new ProfilerDomain($this);
		}
		/** @var ProfilerDomainInterface $domain */
		$domain = $this->domains['Profiler'];
		return $domain;
	}


	public function runtime(): RuntimeDomainInterface
	{
		if (!isset($this->domains['Runtime'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Runtime'] = new RuntimeDomain($this);
		}
		/** @var RuntimeDomainInterface $domain */
		$domain = $this->domains['Runtime'];
		return $domain;
	}


	public function schema(): SchemaDomainInterface
	{
		if (!isset($this->domains['Schema'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Schema'] = new SchemaDomain($this);
		}
		/** @var SchemaDomainInterface $domain */
		$domain = $this->domains['Schema'];
		return $domain;
	}


	public function security(): SecurityDomainInterface
	{
		if (!isset($this->domains['Security'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Security'] = new SecurityDomain($this);
		}
		/** @var SecurityDomainInterface $domain */
		$domain = $this->domains['Security'];
		return $domain;
	}


	public function serviceWorker(): ServiceWorkerDomainInterface
	{
		if (!isset($this->domains['ServiceWorker'])) {
			/** @var InternalClientInterface $this */
			$this->domains['ServiceWorker'] = new ServiceWorkerDomain($this);
		}
		/** @var ServiceWorkerDomainInterface $domain */
		$domain = $this->domains['ServiceWorker'];
		return $domain;
	}


	public function storage(): StorageDomainInterface
	{
		if (!isset($this->domains['Storage'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Storage'] = new StorageDomain($this);
		}
		/** @var StorageDomainInterface $domain */
		$domain = $this->domains['Storage'];
		return $domain;
	}


	public function systemInfo(): SystemInfoDomainInterface
	{
		if (!isset($this->domains['SystemInfo'])) {
			/** @var InternalClientInterface $this */
			$this->domains['SystemInfo'] = new SystemInfoDomain($this);
		}
		/** @var SystemInfoDomainInterface $domain */
		$domain = $this->domains['SystemInfo'];
		return $domain;
	}


	public function target(): TargetDomainInterface
	{
		if (!isset($this->domains['Target'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Target'] = new TargetDomain($this);
		}
		/** @var TargetDomainInterface $domain */
		$domain = $this->domains['Target'];
		return $domain;
	}


	public function tethering(): TetheringDomainInterface
	{
		if (!isset($this->domains['Tethering'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Tethering'] = new TetheringDomain($this);
		}
		/** @var TetheringDomainInterface $domain */
		$domain = $this->domains['Tethering'];
		return $domain;
	}


	public function tracing(): TracingDomainInterface
	{
		if (!isset($this->domains['Tracing'])) {
			/** @var InternalClientInterface $this */
			$this->domains['Tracing'] = new TracingDomain($this);
		}
		/** @var TracingDomainInterface $domain */
		$domain = $this->domains['Tracing'];
		return $domain;
	}


	public function webAudio(): WebAudioDomainInterface
	{
		if (!isset($this->domains['WebAudio'])) {
			/** @var InternalClientInterface $this */
			$this->domains['WebAudio'] = new WebAudioDomain($this);
		}
		/** @var WebAudioDomainInterface $domain */
		$domain = $this->domains['WebAudio'];
		return $domain;
	}


	public function webAuthn(): WebAuthnDomainInterface
	{
		if (!isset($this->domains['WebAuthn'])) {
			/** @var InternalClientInterface $this */
			$this->domains['WebAuthn'] = new WebAuthnDomain($this);
		}
		/** @var WebAuthnDomainInterface $domain */
		$domain = $this->domains['WebAuthn'];
		return $domain;
	}
}
