<?php
namespace ChromeDevtoolsProtocol\Util;

/**
 * Utility functions for HTTP headers.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class HeadersUtil
{

	/**
	 * Normalizes header name.
	 *
	 * @param string $headerName
	 * @return string
	 */
	public static function normalize(string $headerName): string
	{
		return str_replace("_", "-", strtolower($headerName));
	}

}
