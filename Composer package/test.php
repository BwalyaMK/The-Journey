<?php

require __DIR__ . '/vendor/autoload.php';

use Kalambo\CustomComposerPackage\StringUtils;

echo StringUtils::capitalize("hello world") . PHP_EOL;
echo StringUtils::slugify("My Blog Title!") . PHP_EOL;
echo StringUtils::truncate("This is too long", 10) . PHP_EOL;
