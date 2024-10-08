<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * The type of preloading attempted. It corresponds to mojom::SpeculationAction (although PrefetchWithSubresources is omitted as it isn't being used by clients).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SpeculationActionEnum
{
	public const PREFETCH = 'Prefetch';
	public const PRERENDER = 'Prerender';
}
