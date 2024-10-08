# Chrome Devtools Protocol PHP client

[![Build](https://circleci.com/gh/jakubkulhan/chrome-devtools-protocol.svg?style=svg)](https://circleci.com/gh/jakubkulhan/chrome-devtools-protocol)
[![Latest Stable Version](https://poser.pugx.org/jakubkulhan/chrome-devtools-protocol/v/stable?format=flat)](https://packagist.org/packages/jakubkulhan/chrome-devtools-protocol)
[![License](https://poser.pugx.org/jakubkulhan/chrome-devtools-protocol/license?format=flat)](https://packagist.org/packages/jakubkulhan/chrome-devtools-protocol)

> PHP client for [Chrome Devtools Protocol](https://chromedevtools.github.io/devtools-protocol/).

## Basic usage

```php
// context creates deadline for operations
$ctx = Context::withTimeout(Context::background(), 30 /* seconds */);

// launcher starts chrome process ($instance)
$launcher = new Launcher();
$instance = $launcher->launch($ctx);

try {
	// work with new tab
	$tab = $instance->open($ctx);
	$tab->activate($ctx);

	$devtools = $tab->devtools();
	try {
		$devtools->page()->enable($ctx);
		$devtools->page()->navigate($ctx, NavigateRequest::builder()->setUrl("https://www.google.com/")->build());
		$devtools->page()->awaitLoadEventFired($ctx);

		// ... work with page ...
		// e.g.
		// - print to PDF: $devtools->page()->printToPDF($ctx, PrintToPDFRequest::make());
		// - capture screenshot: $devtools->page()->captureScreenshot($ctx, CaptureScreenshotRequest::builder()->setFormat("jpg")->setQuality(95)->build());

	} finally {
		// devtools client needs to be closed
		$devtools->close();
	}

} finally {
	// process needs to be killed
	$instance->close();
}
```

## Headless Chrome isolated contexts

Headless Chrome supports feature called *browser contexts* - they're like incognito windows - cookies, local storage etc. are not shared. After *browser context* is destroyed, user data created in given context, are destroyed.

Unlike incognito windows, there can be multiple isolate *browser contexts* at the same time.

```php
$ctx = Context::withTimeout(Context::background(), 10);
$launcher = new Launcher();
$instance = $launcher->launch($ctx);
try {
	$session = $instance->createSession($ctx);
	try {

		// $session implements DevtoolsClientInterface, same as returned from Tab::devtools()

	} finally {
		$session->close();
	}
} finally {
	$instance->close();
}
```

## Using an already running Chrome browser

```php
use ChromeDevtoolsProtocol\Instance\Instance;

$instance = new Instance(/* host: */ "localhost", /* port: */ 9222);


$ctx = Context::withTimeout(Context::background(), 30 /* seconds */);

$tab = $instance->open($ctx);
$tab->activate($ctx);

$devtools = $tab->devtools();

// ...work with devtools

// no need to call ->close() as no new process is started
```

## License

Licensed under MIT license. See `LICENSE` file.
