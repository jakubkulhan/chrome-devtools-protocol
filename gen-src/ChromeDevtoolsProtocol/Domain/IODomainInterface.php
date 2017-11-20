<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\IO\CloseRequest;
use ChromeDevtoolsProtocol\Model\IO\ReadRequest;
use ChromeDevtoolsProtocol\Model\IO\ReadResponse;
use ChromeDevtoolsProtocol\Model\IO\ResolveBlobRequest;
use ChromeDevtoolsProtocol\Model\IO\ResolveBlobResponse;

/**
 * Input/Output operations for streams produced by DevTools.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface IODomainInterface
{
	/**
	 * Read a chunk of the stream
	 *
	 * @param ContextInterface $ctx
	 * @param ReadRequest $request
	 *
	 * @return ReadResponse
	 */
	public function read(ContextInterface $ctx, ReadRequest $request): ReadResponse;


	/**
	 * Close the stream, discard any temporary backing storage.
	 *
	 * @param ContextInterface $ctx
	 * @param CloseRequest $request
	 *
	 * @return void
	 */
	public function close(ContextInterface $ctx, CloseRequest $request): void;


	/**
	 * Return UUID of Blob object specified by a remote object id.
	 *
	 * @param ContextInterface $ctx
	 * @param ResolveBlobRequest $request
	 *
	 * @return ResolveBlobResponse
	 */
	public function resolveBlob(ContextInterface $ctx, ResolveBlobRequest $request): ResolveBlobResponse;
}
