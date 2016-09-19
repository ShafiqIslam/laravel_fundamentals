<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Tag;

class TagController extends Controller
{
    public function show_tag_articles(Tag $tag) {
    	$articles = $tag->articles()->published()->get();
    	return view('articles.index', compact('articles', 'tag'));
    }
}
