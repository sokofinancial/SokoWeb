<?php

namespace App\Helpers;

class CustomHelper
{
    public function limitWords($text, $limit = 100)
    {
        $words = explode(' ', $text, $limit + 1);
        $limitedText = implode(' ', array_slice($words, 0, $limit));

        return count($words) > $limit ? $limitedText . ' ...' : $limitedText;
    }
}
