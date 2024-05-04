<?php

namespace App\Repositories\Interfaces;


interface BaseRepositoryInterface
{

    public function getTitle($url);

    public function getNews($url);

    public function getNewsImages($url);
}
