<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index() {
        $posts = Article::all();
        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
      }
}
