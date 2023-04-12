<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;


class UrlDisplayController extends Controller
{
   
public function displayUrl()
{
    $urls = Url::all();
    return view('urls.display', compact('urls'));
}

}
