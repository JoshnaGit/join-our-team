<?php

namespace App\Http\Controllers;
use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class UrlShortenerController extends Controller
{
    public function shortenUrl(Request $request)
    {
        #dd($request);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'url' => 'required|url',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }


        $url = new Url;
        $url->title = $request->input('title',' ');
        $url->url = $request->input('url');
        $url->short_url = \Illuminate\Support\Str::random(6);
        $url->save();

        return response()->json([
            'shortened_url' => "https://" . $url->short_url,
            'title' => url($url->title),
            'url' => url($url->url),
        ]);
    }
}
