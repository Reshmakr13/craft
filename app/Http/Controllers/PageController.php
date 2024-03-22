<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Ynotz\SmartPages\Http\Controllers\SmartController;

class PageController extends SmartController
{
    public function home()
    {
        return $this->buildResponse('pages.home');
    }
    public function homecomponent()
    {
        return $this->buildResponse('pages.homecomponent');
    }
}
