<?php
namespace ChromeDevtoolsProtocol\Util;

use PHPUnit\Framework\TestCase;

class HeadersUtilTest extends TestCase
{

	/**
	 * @dataProvider provideForTestNormalize
	 */
	public function testNormalize(string $raw, string $normalized)
	{
		$this->assertEquals($normalized, HeadersUtil::normalize($raw));
	}

	public function provideForTestNormalize()
	{
		$data = [
			"foo" => "foo",
			"Foo" => "foo",
			"FOO" => "foo",
			"foO" => "foo",
			"foo-bar" => "foo-bar",
			"Foo-Bar" => "foo-bar",
			"FOO-BAR" => "foo-bar",
			"foo_bar" => "foo-bar",
			"Foo_Bar" => "foo-bar",
			"FOO_BAR" => "foo-bar",
		];

		foreach ($data as $key => &$value) {
			$value = [$key, $value];
		}

		return $data;
	}

}
