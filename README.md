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

## License

Licensed under MIT license. See `LICENSE` file.
