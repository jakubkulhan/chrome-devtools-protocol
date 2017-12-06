<?php
namespace ChromeDevtoolsProtocol;

use GuzzleHttp\Client;
use Nette\Utils\Strings;

require_once __DIR__ . "/vendor/autoload.php";

$client = new Client();

$response = $client->request(
	"GET",
	"https://chromium.googlesource.com/chromium/src/+/master/third_party/WebKit/Source/core/inspector/browser_protocol.json?format=TEXT"
);

$protocol = json_decode(base64_decode($response->getBody()->getContents()));

$response = $client->request(
	"GET",
	"https://chromium.googlesource.com/v8/v8/+/master/src/inspector/js_protocol.json?format=TEXT"
);

$protocolJs = json_decode(base64_decode($response->getBody()->getContents()));

$protocol->domains = array_merge($protocol->domains, $protocolJs->domains);

usort($protocol->domains, function ($a, $b) {
	return strcasecmp($a->domain, $b->domain);
});
foreach ($protocol->domains as $domainSpec) {
	$domainSpec->commands = $domainSpec->commands ?? [];
	usort($domainSpec->commands, function ($a, $b) {
		return strcasecmp($a->name, $b->name);
	});

	$domainSpec->events = $domainSpec->events ?? [];
	usort($domainSpec->events, function ($a, $b) {
		return strcasecmp($a->name, $b->name);
	});
}

function unifyDescriptions($object)
{
	$returnObject = new \stdClass();

	foreach ($object as $key => $value) {
		if ($key === "description") {
			$value = preg_replace("/\\s+/u", " ", $value);
			$value = preg_replace("/^\\s+|\\s+$/u", "", $value);
			$returnObject->{$key} = $value;
		} else if (is_object($value)) {
			$returnObject->{$key} = unifyDescriptions($value);
		} else if (is_array($value)) {
			$returnObject->{$key} = [];
			foreach ($value as $item) {
				if (is_object($item)) {
					$returnObject->{$key}[] = unifyDescriptions($item);
				} else {
					$returnObject->{$key}[] = $item;
				}
			}
		} else {
			$returnObject->{$key} = $value;
		}
	}

	return $returnObject;
}

$protocol = unifyDescriptions($protocol);

echo json_encode($protocol, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), "\n";
