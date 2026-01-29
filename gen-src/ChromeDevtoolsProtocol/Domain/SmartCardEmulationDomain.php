<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\BeginTransactionRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\CancelRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ConnectRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ControlRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\DisconnectRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\EndTransactionRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\EstablishContextRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\GetAttribRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\GetStatusChangeRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ListReadersRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReleaseContextRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportBeginTransactionResultRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportConnectResultRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportDataResultRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportErrorRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportEstablishContextResultRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportGetStatusChangeResultRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportListReadersResultRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportPlainResultRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportReleaseContextResultRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\ReportStatusResultRequest;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\SetAttribRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\StatusRequestedEvent;
use ChromeDevtoolsProtocol\Model\SmartCardEmulation\TransmitRequestedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class SmartCardEmulationDomain implements SmartCardEmulationDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.enable', $request);
	}


	public function reportBeginTransactionResult(ContextInterface $ctx, ReportBeginTransactionResultRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportBeginTransactionResult', $request);
	}


	public function reportConnectResult(ContextInterface $ctx, ReportConnectResultRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportConnectResult', $request);
	}


	public function reportDataResult(ContextInterface $ctx, ReportDataResultRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportDataResult', $request);
	}


	public function reportError(ContextInterface $ctx, ReportErrorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportError', $request);
	}


	public function reportEstablishContextResult(ContextInterface $ctx, ReportEstablishContextResultRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportEstablishContextResult', $request);
	}


	public function reportGetStatusChangeResult(ContextInterface $ctx, ReportGetStatusChangeResultRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportGetStatusChangeResult', $request);
	}


	public function reportListReadersResult(ContextInterface $ctx, ReportListReadersResultRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportListReadersResult', $request);
	}


	public function reportPlainResult(ContextInterface $ctx, ReportPlainResultRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportPlainResult', $request);
	}


	public function reportReleaseContextResult(ContextInterface $ctx, ReportReleaseContextResultRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportReleaseContextResult', $request);
	}


	public function reportStatusResult(ContextInterface $ctx, ReportStatusResultRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'SmartCardEmulation.reportStatusResult', $request);
	}


	public function addBeginTransactionRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.beginTransactionRequested', function ($event) use ($listener) {
			return $listener(BeginTransactionRequestedEvent::fromJson($event));
		});
	}


	public function awaitBeginTransactionRequested(ContextInterface $ctx): BeginTransactionRequestedEvent
	{
		return BeginTransactionRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.beginTransactionRequested'));
	}


	public function addCancelRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.cancelRequested', function ($event) use ($listener) {
			return $listener(CancelRequestedEvent::fromJson($event));
		});
	}


	public function awaitCancelRequested(ContextInterface $ctx): CancelRequestedEvent
	{
		return CancelRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.cancelRequested'));
	}


	public function addConnectRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.connectRequested', function ($event) use ($listener) {
			return $listener(ConnectRequestedEvent::fromJson($event));
		});
	}


	public function awaitConnectRequested(ContextInterface $ctx): ConnectRequestedEvent
	{
		return ConnectRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.connectRequested'));
	}


	public function addControlRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.controlRequested', function ($event) use ($listener) {
			return $listener(ControlRequestedEvent::fromJson($event));
		});
	}


	public function awaitControlRequested(ContextInterface $ctx): ControlRequestedEvent
	{
		return ControlRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.controlRequested'));
	}


	public function addDisconnectRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.disconnectRequested', function ($event) use ($listener) {
			return $listener(DisconnectRequestedEvent::fromJson($event));
		});
	}


	public function awaitDisconnectRequested(ContextInterface $ctx): DisconnectRequestedEvent
	{
		return DisconnectRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.disconnectRequested'));
	}


	public function addEndTransactionRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.endTransactionRequested', function ($event) use ($listener) {
			return $listener(EndTransactionRequestedEvent::fromJson($event));
		});
	}


	public function awaitEndTransactionRequested(ContextInterface $ctx): EndTransactionRequestedEvent
	{
		return EndTransactionRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.endTransactionRequested'));
	}


	public function addEstablishContextRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.establishContextRequested', function ($event) use ($listener) {
			return $listener(EstablishContextRequestedEvent::fromJson($event));
		});
	}


	public function awaitEstablishContextRequested(ContextInterface $ctx): EstablishContextRequestedEvent
	{
		return EstablishContextRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.establishContextRequested'));
	}


	public function addGetAttribRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.getAttribRequested', function ($event) use ($listener) {
			return $listener(GetAttribRequestedEvent::fromJson($event));
		});
	}


	public function awaitGetAttribRequested(ContextInterface $ctx): GetAttribRequestedEvent
	{
		return GetAttribRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.getAttribRequested'));
	}


	public function addGetStatusChangeRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.getStatusChangeRequested', function ($event) use ($listener) {
			return $listener(GetStatusChangeRequestedEvent::fromJson($event));
		});
	}


	public function awaitGetStatusChangeRequested(ContextInterface $ctx): GetStatusChangeRequestedEvent
	{
		return GetStatusChangeRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.getStatusChangeRequested'));
	}


	public function addListReadersRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.listReadersRequested', function ($event) use ($listener) {
			return $listener(ListReadersRequestedEvent::fromJson($event));
		});
	}


	public function awaitListReadersRequested(ContextInterface $ctx): ListReadersRequestedEvent
	{
		return ListReadersRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.listReadersRequested'));
	}


	public function addReleaseContextRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.releaseContextRequested', function ($event) use ($listener) {
			return $listener(ReleaseContextRequestedEvent::fromJson($event));
		});
	}


	public function awaitReleaseContextRequested(ContextInterface $ctx): ReleaseContextRequestedEvent
	{
		return ReleaseContextRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.releaseContextRequested'));
	}


	public function addSetAttribRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.setAttribRequested', function ($event) use ($listener) {
			return $listener(SetAttribRequestedEvent::fromJson($event));
		});
	}


	public function awaitSetAttribRequested(ContextInterface $ctx): SetAttribRequestedEvent
	{
		return SetAttribRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.setAttribRequested'));
	}


	public function addStatusRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.statusRequested', function ($event) use ($listener) {
			return $listener(StatusRequestedEvent::fromJson($event));
		});
	}


	public function awaitStatusRequested(ContextInterface $ctx): StatusRequestedEvent
	{
		return StatusRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.statusRequested'));
	}


	public function addTransmitRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('SmartCardEmulation.transmitRequested', function ($event) use ($listener) {
			return $listener(TransmitRequestedEvent::fromJson($event));
		});
	}


	public function awaitTransmitRequested(ContextInterface $ctx): TransmitRequestedEvent
	{
		return TransmitRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'SmartCardEmulation.transmitRequested'));
	}
}
