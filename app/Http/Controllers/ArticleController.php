<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Auth;

use App\Models\Article;
use App\Models\Tag;

use Carbon\Carbon;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $articles = Article::latest()->published()->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $tags = Tag::lists('name', 'id')->toArray();
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request) {
        $this->_createArticle($request);
        flash()->success('Article Created Successfully!');
        return redirect('article');
    }

    private function _createArticle($request) {
        $article = Auth::user()->articles()->save(new Article($request->all()));
        $article->tags()->attach($request->input('tag_list'));
        return $article;
    }

    /**
     * Display the specified resource.
     *
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article) {
        // $article = Article::findOrFail($id);
        // article is now directly coming via route model binding...

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article) {
        $tags = Tag::lists('name', 'id')->toArray();
        return view('articles.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request\ArticleRequest  $request
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article) {
        $this->_updateArticle($article, $request);
        flash()->success('Article Updated Successfully!');
        return redirect('article');
    }

    private function _updateArticle($article, $request) {
        $article->update($request->all());
        $article->tags()->sync($request->input('tag_list'));
        return $article;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
