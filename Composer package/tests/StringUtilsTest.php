<?php

// tests/StringUtilsTest.php

use PHPUnit\Framework\TestCase;
use Kalambo\CustomComposerPackage\StringUtils;

class StringUtilsTest extends TestCase
{
    public function testCapitalize()
    {
        $this->assertEquals('Hello World', StringUtils::capitalize('hello world'));
    }

    public function testSlugify()
    {
        $this->assertEquals('my-blog-title', StringUtils::slugify('My Blog Title'));
    }
    public function testTruncate()
    {
        $this->assertEquals('This is to...', StringUtils::truncate('This is too long', 10));
        $this->assertEquals('Short text', StringUtils::truncate('Short text', 20));
    }
}
