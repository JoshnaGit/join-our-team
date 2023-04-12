<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Facades\View;


class UrlController extends Controller
{
    public function countUrls()
    {
    $totalUrls = Url::count();
    return $totalUrls;
    }
    
    
    public function dashboard()
    {
    $totalUrls = $this->countUrls();
    return view('dashboard', ['totalUrls' => $totalUrls]);
    }

}
