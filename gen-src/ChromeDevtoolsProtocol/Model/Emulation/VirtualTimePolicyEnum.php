<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * advance: If the scheduler runs out of immediate work, the virtual time base may fast forward to allow the next delayed task (if any) to run; pause: The virtual time base may not advance; pauseIfNetworkFetchesPending: The virtual time base may not advance if there are any pending resource fetches.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class VirtualTimePolicyEnum
{
	const ADVANCE = 'advance';
	const PAUSE = 'pause';
	const PAUSE_IF_NETWORK_FETCHES_PENDING = 'pauseIfNetworkFetchesPending';
}
