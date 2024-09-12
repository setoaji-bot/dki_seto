<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FeedController extends Controller
{
    public function showFeed()
    {
        $response = Http::get('https://jakpreneur.jakarta.go.id/api/jak-konek/show-data-jak-konek');

        if ($response->successful()) {
            $feedData = $response->json();
            return view('feed', ['feedData' => $feedData]);
        } else {
            return view('feed', ['feedData' => []]);
        }
    }
}
