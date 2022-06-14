<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Service\BlogService;



class BaseController extends Controller
{
    public $service;

    public function __construct(BlogService $service)
    {
        $this->service = $service;
    }
}
