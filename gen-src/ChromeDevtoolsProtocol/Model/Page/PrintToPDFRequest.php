<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.printToPDF command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrintToPDFRequest implements \JsonSerializable
{
	/**
	 * Paper orientation. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $landscape;

	/**
	 * Display header and footer. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $displayHeaderFooter;

	/**
	 * Print background graphics. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $printBackground;

	/**
	 * Scale of the webpage rendering. Defaults to 1.
	 *
	 * @var int|float|null
	 */
	public $scale;

	/**
	 * Paper width in inches. Defaults to 8.5 inches.
	 *
	 * @var int|float|null
	 */
	public $paperWidth;

	/**
	 * Paper height in inches. Defaults to 11 inches.
	 *
	 * @var int|float|null
	 */
	public $paperHeight;

	/**
	 * Top margin in inches. Defaults to 1cm (~0.4 inches).
	 *
	 * @var int|float|null
	 */
	public $marginTop;

	/**
	 * Bottom margin in inches. Defaults to 1cm (~0.4 inches).
	 *
	 * @var int|float|null
	 */
	public $marginBottom;

	/**
	 * Left margin in inches. Defaults to 1cm (~0.4 inches).
	 *
	 * @var int|float|null
	 */
	public $marginLeft;

	/**
	 * Right margin in inches. Defaults to 1cm (~0.4 inches).
	 *
	 * @var int|float|null
	 */
	public $marginRight;

	/**
	 * Paper ranges to print, e.g., '1-5, 8, 11-13'. Defaults to the empty string, which means print all pages.
	 *
	 * @var string|null
	 */
	public $pageRanges;

	/**
	 * Whether to silently ignore invalid but successfully parsed page ranges, such as '3-2'. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $ignoreInvalidPageRanges;

	/**
	 * HTML template for the print header. Should be valid HTML markup with following classes used to inject printing values into them: - `date`: formatted print date - `title`: document title - `url`: document location - `pageNumber`: current page number - `totalPages`: total pages in the document For example, `<span class=title></span>` would generate span containing the title.
	 *
	 * @var string|null
	 */
	public $headerTemplate;

	/**
	 * HTML template for the print footer. Should use the same format as the `headerTemplate`.
	 *
	 * @var string|null
	 */
	public $footerTemplate;

	/**
	 * Whether or not to prefer page size as defined by css. Defaults to false, in which case the content will be scaled to fit the paper size.
	 *
	 * @var bool|null
	 */
	public $preferCSSPageSize;

	/**
	 * return as stream
	 *
	 * @var string|null
	 */
	public $transferMode;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->landscape)) {
			$instance->landscape = (bool)$data->landscape;
		}
		if (isset($data->displayHeaderFooter)) {
			$instance->displayHeaderFooter = (bool)$data->displayHeaderFooter;
		}
		if (isset($data->printBackground)) {
			$instance->printBackground = (bool)$data->printBackground;
		}
		if (isset($data->scale)) {
			$instance->scale = $data->scale;
		}
		if (isset($data->paperWidth)) {
			$instance->paperWidth = $data->paperWidth;
		}
		if (isset($data->paperHeight)) {
			$instance->paperHeight = $data->paperHeight;
		}
		if (isset($data->marginTop)) {
			$instance->marginTop = $data->marginTop;
		}
		if (isset($data->marginBottom)) {
			$instance->marginBottom = $data->marginBottom;
		}
		if (isset($data->marginLeft)) {
			$instance->marginLeft = $data->marginLeft;
		}
		if (isset($data->marginRight)) {
			$instance->marginRight = $data->marginRight;
		}
		if (isset($data->pageRanges)) {
			$instance->pageRanges = (string)$data->pageRanges;
		}
		if (isset($data->ignoreInvalidPageRanges)) {
			$instance->ignoreInvalidPageRanges = (bool)$data->ignoreInvalidPageRanges;
		}
		if (isset($data->headerTemplate)) {
			$instance->headerTemplate = (string)$data->headerTemplate;
		}
		if (isset($data->footerTemplate)) {
			$instance->footerTemplate = (string)$data->footerTemplate;
		}
		if (isset($data->preferCSSPageSize)) {
			$instance->preferCSSPageSize = (bool)$data->preferCSSPageSize;
		}
		if (isset($data->transferMode)) {
			$instance->transferMode = (string)$data->transferMode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->landscape !== null) {
			$data->landscape = $this->landscape;
		}
		if ($this->displayHeaderFooter !== null) {
			$data->displayHeaderFooter = $this->displayHeaderFooter;
		}
		if ($this->printBackground !== null) {
			$data->printBackground = $this->printBackground;
		}
		if ($this->scale !== null) {
			$data->scale = $this->scale;
		}
		if ($this->paperWidth !== null) {
			$data->paperWidth = $this->paperWidth;
		}
		if ($this->paperHeight !== null) {
			$data->paperHeight = $this->paperHeight;
		}
		if ($this->marginTop !== null) {
			$data->marginTop = $this->marginTop;
		}
		if ($this->marginBottom !== null) {
			$data->marginBottom = $this->marginBottom;
		}
		if ($this->marginLeft !== null) {
			$data->marginLeft = $this->marginLeft;
		}
		if ($this->marginRight !== null) {
			$data->marginRight = $this->marginRight;
		}
		if ($this->pageRanges !== null) {
			$data->pageRanges = $this->pageRanges;
		}
		if ($this->ignoreInvalidPageRanges !== null) {
			$data->ignoreInvalidPageRanges = $this->ignoreInvalidPageRanges;
		}
		if ($this->headerTemplate !== null) {
			$data->headerTemplate = $this->headerTemplate;
		}
		if ($this->footerTemplate !== null) {
			$data->footerTemplate = $this->footerTemplate;
		}
		if ($this->preferCSSPageSize !== null) {
			$data->preferCSSPageSize = $this->preferCSSPageSize;
		}
		if ($this->transferMode !== null) {
			$data->transferMode = $this->transferMode;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return PrintToPDFRequestBuilder
	 */
	public static function builder(): PrintToPDFRequestBuilder
	{
		return new PrintToPDFRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
