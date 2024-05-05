<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IndexRepositoryInterface;
use DOMDocument;
use DOMXPath;
use Drnxloc\LaravelHtmlDom\HtmlDomParser;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct(protected IndexRepositoryInterface $indexRepository)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $url = 'https://www.bamboweb.ir';
        $title = $this->indexRepository->getTitle($url);
        $news = $this->indexRepository->getNews($url);
        $images = $this->indexRepository->getNewsImages($url);

        return view('home', compact('title', 'news', 'images'));
    }
    
}
