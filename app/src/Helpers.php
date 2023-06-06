<?php declare(strict_types=1);

namespace App;

class Helpers
{
    private function __construct()
    {
        // Keep private so can't instantiate
    }
    public static function showText(string $text, string $tagClass): void
    {
        echo "<p class=\"$tagClass\">$text</p>";
    }
}