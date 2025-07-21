<?php

namespace Kalambo\CustomComposerPackage;

class StringUtils
{
    public static function capitalize(string $text): string
    {
        return ucwords(strtolower($text));
    }

    public static function slugify(string $text): string
    {
        $text = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($text)));
        return trim($text, '-');
    }

    public static function truncate(string $text, int $limit): string
    {
        return strlen($text) > $limit ? substr($text, 0, $limit) . '...' : $text;
    }
}
