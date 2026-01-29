<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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

/**
 * SmartCardEmulation domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface SmartCardEmulationDomainInterface
{
	/**
	 * Disables the |SmartCardEmulation| domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables the |SmartCardEmulation| domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Reports the result of a |SCardBeginTransaction| call. On success, this creates a new transaction object. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaddb835dce01a0da1d6ca02d33ee7d861 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardbegintransaction
	 *
	 * @param ContextInterface $ctx
	 * @param ReportBeginTransactionResultRequest $request
	 *
	 * @return void
	 */
	public function reportBeginTransactionResult(ContextInterface $ctx, ReportBeginTransactionResultRequest $request): void;


	/**
	 * Reports the successful result of a |SCardConnect| call. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga4e515829752e0a8dbc4d630696a8d6a5 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardconnecta
	 *
	 * @param ContextInterface $ctx
	 * @param ReportConnectResultRequest $request
	 *
	 * @return void
	 */
	public function reportConnectResult(ContextInterface $ctx, ReportConnectResultRequest $request): void;


	/**
	 * Reports the successful result of a call that sends back data on success. Used for |SCardTransmit|, |SCardControl|, and |SCardGetAttrib|. This maps to: 1. SCardTransmit PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga9a2d77242a271310269065e64633ab99 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardtransmit 2. SCardControl PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gac3454d4657110fd7f753b2d3d8f4e32f Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardcontrol 3. SCardGetAttrib PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaacfec51917255b7a25b94c5104961602 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardgetattrib
	 *
	 * @param ContextInterface $ctx
	 * @param ReportDataResultRequest $request
	 *
	 * @return void
	 */
	public function reportDataResult(ContextInterface $ctx, ReportDataResultRequest $request): void;


	/**
	 * Reports an error result for the given request.
	 *
	 * @param ContextInterface $ctx
	 * @param ReportErrorRequest $request
	 *
	 * @return void
	 */
	public function reportError(ContextInterface $ctx, ReportErrorRequest $request): void;


	/**
	 * Reports the successful result of a |SCardEstablishContext| call. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaa1b8970169fd4883a6dc4a8f43f19b67 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardestablishcontext
	 *
	 * @param ContextInterface $ctx
	 * @param ReportEstablishContextResultRequest $request
	 *
	 * @return void
	 */
	public function reportEstablishContextResult(ContextInterface $ctx, ReportEstablishContextResultRequest $request): void;


	/**
	 * Reports the successful result of a |SCardGetStatusChange| call. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga33247d5d1257d59e55647c3bb717db24 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardgetstatuschangea
	 *
	 * @param ContextInterface $ctx
	 * @param ReportGetStatusChangeResultRequest $request
	 *
	 * @return void
	 */
	public function reportGetStatusChangeResult(ContextInterface $ctx, ReportGetStatusChangeResultRequest $request): void;


	/**
	 * Reports the successful result of a |SCardListReaders| call. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga93b07815789b3cf2629d439ecf20f0d9 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardlistreadersa
	 *
	 * @param ContextInterface $ctx
	 * @param ReportListReadersResultRequest $request
	 *
	 * @return void
	 */
	public function reportListReadersResult(ContextInterface $ctx, ReportListReadersResultRequest $request): void;


	/**
	 * Reports the successful result of a call that returns only a result code. Used for: |SCardCancel|, |SCardDisconnect|, |SCardSetAttrib|, |SCardEndTransaction|. This maps to: 1. SCardCancel PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaacbbc0c6d6c0cbbeb4f4debf6fbeeee6 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardcancel 2. SCardDisconnect PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga4be198045c73ec0deb79e66c0ca1738a Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scarddisconnect 3. SCardSetAttrib PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga060f0038a4ddfd5dd2b8fadf3c3a2e4f Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardsetattrib 4. SCardEndTransaction PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gae8742473b404363e5c587f570d7e2f3b Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardendtransaction
	 *
	 * @param ContextInterface $ctx
	 * @param ReportPlainResultRequest $request
	 *
	 * @return void
	 */
	public function reportPlainResult(ContextInterface $ctx, ReportPlainResultRequest $request): void;


	/**
	 * Reports the successful result of a |SCardReleaseContext| call. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga6aabcba7744c5c9419fdd6404f73a934 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardreleasecontext
	 *
	 * @param ContextInterface $ctx
	 * @param ReportReleaseContextResultRequest $request
	 *
	 * @return void
	 */
	public function reportReleaseContextResult(ContextInterface $ctx, ReportReleaseContextResultRequest $request): void;


	/**
	 * Reports the successful result of a |SCardStatus| call. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gae49c3c894ad7ac12a5b896bde70d0382 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardstatusa
	 *
	 * @param ContextInterface $ctx
	 * @param ReportStatusResultRequest $request
	 *
	 * @return void
	 */
	public function reportStatusResult(ContextInterface $ctx, ReportStatusResultRequest $request): void;


	/**
	 * Fired when |SCardBeginTransaction| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaddb835dce01a0da1d6ca02d33ee7d861 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardbegintransaction
	 *
	 * Listener will be called whenever event SmartCardEmulation.beginTransactionRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addBeginTransactionRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardBeginTransaction| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaddb835dce01a0da1d6ca02d33ee7d861 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardbegintransaction
	 *
	 * Method will block until first SmartCardEmulation.beginTransactionRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return BeginTransactionRequestedEvent
	 */
	public function awaitBeginTransactionRequested(ContextInterface $ctx): BeginTransactionRequestedEvent;


	/**
	 * Fired when |SCardCancel| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaacbbc0c6d6c0cbbeb4f4debf6fbeeee6 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardcancel
	 *
	 * Listener will be called whenever event SmartCardEmulation.cancelRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCancelRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardCancel| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaacbbc0c6d6c0cbbeb4f4debf6fbeeee6 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardcancel
	 *
	 * Method will block until first SmartCardEmulation.cancelRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CancelRequestedEvent
	 */
	public function awaitCancelRequested(ContextInterface $ctx): CancelRequestedEvent;


	/**
	 * Fired when |SCardConnect| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga4e515829752e0a8dbc4d630696a8d6a5 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardconnecta
	 *
	 * Listener will be called whenever event SmartCardEmulation.connectRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addConnectRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardConnect| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga4e515829752e0a8dbc4d630696a8d6a5 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardconnecta
	 *
	 * Method will block until first SmartCardEmulation.connectRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ConnectRequestedEvent
	 */
	public function awaitConnectRequested(ContextInterface $ctx): ConnectRequestedEvent;


	/**
	 * Fired when |SCardControl| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gac3454d4657110fd7f753b2d3d8f4e32f Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardcontrol
	 *
	 * Listener will be called whenever event SmartCardEmulation.controlRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addControlRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardControl| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gac3454d4657110fd7f753b2d3d8f4e32f Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardcontrol
	 *
	 * Method will block until first SmartCardEmulation.controlRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ControlRequestedEvent
	 */
	public function awaitControlRequested(ContextInterface $ctx): ControlRequestedEvent;


	/**
	 * Fired when |SCardDisconnect| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga4be198045c73ec0deb79e66c0ca1738a Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scarddisconnect
	 *
	 * Listener will be called whenever event SmartCardEmulation.disconnectRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDisconnectRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardDisconnect| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga4be198045c73ec0deb79e66c0ca1738a Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scarddisconnect
	 *
	 * Method will block until first SmartCardEmulation.disconnectRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DisconnectRequestedEvent
	 */
	public function awaitDisconnectRequested(ContextInterface $ctx): DisconnectRequestedEvent;


	/**
	 * Fired when |SCardEndTransaction| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gae8742473b404363e5c587f570d7e2f3b Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardendtransaction
	 *
	 * Listener will be called whenever event SmartCardEmulation.endTransactionRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addEndTransactionRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardEndTransaction| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gae8742473b404363e5c587f570d7e2f3b Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardendtransaction
	 *
	 * Method will block until first SmartCardEmulation.endTransactionRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return EndTransactionRequestedEvent
	 */
	public function awaitEndTransactionRequested(ContextInterface $ctx): EndTransactionRequestedEvent;


	/**
	 * Fired when |SCardEstablishContext| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaa1b8970169fd4883a6dc4a8f43f19b67 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardestablishcontext
	 *
	 * Listener will be called whenever event SmartCardEmulation.establishContextRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addEstablishContextRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardEstablishContext| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaa1b8970169fd4883a6dc4a8f43f19b67 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardestablishcontext
	 *
	 * Method will block until first SmartCardEmulation.establishContextRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return EstablishContextRequestedEvent
	 */
	public function awaitEstablishContextRequested(ContextInterface $ctx): EstablishContextRequestedEvent;


	/**
	 * Fired when |SCardGetAttrib| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaacfec51917255b7a25b94c5104961602 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardgetattrib
	 *
	 * Listener will be called whenever event SmartCardEmulation.getAttribRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addGetAttribRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardGetAttrib| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaacfec51917255b7a25b94c5104961602 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardgetattrib
	 *
	 * Method will block until first SmartCardEmulation.getAttribRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetAttribRequestedEvent
	 */
	public function awaitGetAttribRequested(ContextInterface $ctx): GetAttribRequestedEvent;


	/**
	 * Fired when |SCardGetStatusChange| is called. Timeout is specified in milliseconds. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga33247d5d1257d59e55647c3bb717db24 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardgetstatuschangea
	 *
	 * Listener will be called whenever event SmartCardEmulation.getStatusChangeRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addGetStatusChangeRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardGetStatusChange| is called. Timeout is specified in milliseconds. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga33247d5d1257d59e55647c3bb717db24 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardgetstatuschangea
	 *
	 * Method will block until first SmartCardEmulation.getStatusChangeRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetStatusChangeRequestedEvent
	 */
	public function awaitGetStatusChangeRequested(ContextInterface $ctx): GetStatusChangeRequestedEvent;


	/**
	 * Fired when |SCardListReaders| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga93b07815789b3cf2629d439ecf20f0d9 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardlistreadersa
	 *
	 * Listener will be called whenever event SmartCardEmulation.listReadersRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addListReadersRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardListReaders| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga93b07815789b3cf2629d439ecf20f0d9 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardlistreadersa
	 *
	 * Method will block until first SmartCardEmulation.listReadersRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ListReadersRequestedEvent
	 */
	public function awaitListReadersRequested(ContextInterface $ctx): ListReadersRequestedEvent;


	/**
	 * Fired when |SCardReleaseContext| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga6aabcba7744c5c9419fdd6404f73a934 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardreleasecontext
	 *
	 * Listener will be called whenever event SmartCardEmulation.releaseContextRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addReleaseContextRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardReleaseContext| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga6aabcba7744c5c9419fdd6404f73a934 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardreleasecontext
	 *
	 * Method will block until first SmartCardEmulation.releaseContextRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ReleaseContextRequestedEvent
	 */
	public function awaitReleaseContextRequested(ContextInterface $ctx): ReleaseContextRequestedEvent;


	/**
	 * Fired when |SCardSetAttrib| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga060f0038a4ddfd5dd2b8fadf3c3a2e4f Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardsetattrib
	 *
	 * Listener will be called whenever event SmartCardEmulation.setAttribRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addSetAttribRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardSetAttrib| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga060f0038a4ddfd5dd2b8fadf3c3a2e4f Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardsetattrib
	 *
	 * Method will block until first SmartCardEmulation.setAttribRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return SetAttribRequestedEvent
	 */
	public function awaitSetAttribRequested(ContextInterface $ctx): SetAttribRequestedEvent;


	/**
	 * Fired when |SCardStatus| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gae49c3c894ad7ac12a5b896bde70d0382 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardstatusa
	 *
	 * Listener will be called whenever event SmartCardEmulation.statusRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addStatusRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardStatus| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gae49c3c894ad7ac12a5b896bde70d0382 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardstatusa
	 *
	 * Method will block until first SmartCardEmulation.statusRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return StatusRequestedEvent
	 */
	public function awaitStatusRequested(ContextInterface $ctx): StatusRequestedEvent;


	/**
	 * Fired when |SCardTransmit| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga9a2d77242a271310269065e64633ab99 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardtransmit
	 *
	 * Listener will be called whenever event SmartCardEmulation.transmitRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addTransmitRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when |SCardTransmit| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga9a2d77242a271310269065e64633ab99 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardtransmit
	 *
	 * Method will block until first SmartCardEmulation.transmitRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TransmitRequestedEvent
	 */
	public function awaitTransmitRequested(ContextInterface $ctx): TransmitRequestedEvent;
}
