<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use DOMDocument;
use DOMXPath;

class BaseRepository implements BaseRepositoryInterface
{
    public function getTitle($url)
    {
        $content = file_get_contents($url, FALSE, NULL, 689, 35);
        $title = str_replace("<", "<", $content);
        $content = str_replace(">", ">", $content);
        $content = str_replace("\r\n", "<br/>", $content);
        return $content;
    }

    public function getNews($url)
    {
        $html = file_get_contents($url);
        $start = stripos($html, 'class="news-section"');
        $end = stripos($html, 'class="preview-page-banner-area full-section-webideh"', $offset = $start);
        $length = $end - $start;
        $htmlSection = substr($html, $start, $length);
        preg_match_all('@<h2><a>(.+)</a></h2>@', $htmlSection, $matches);
        return $matches[1];
    }

    public function getNewsImages($url)
    {
        $html = file_get_contents($url);
        $start = stripos($html, 'class="news-section"');
        $end = stripos($html, 'class="preview-page-banner-area full-section-webideh"', $offset = $start);
        $length = $end - $start;
        $htmlSection = substr($html, $start, $length);
        preg_match_all('@<img src="(.+)"@', $htmlSection, $matches);
        return $matches[1];
    }
}
