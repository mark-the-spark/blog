<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Events\ArticleWasCreated;
use App\Repositories\ArticleRepositoryInterface;
use App\BlogMailer;

class ArticlesController extends Controller
{
    public $article;
    public $tags = [];

    public function __construct(ArticleRepositoryInterface $articles)
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
        $this->middleware('isAllowedToEdit', ['only' => 'edit']);

        $this->articles= $articles;
    }

    public function index()
    {
        $articles = $this->articles->getLatest();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = $this->articles->find($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $article = new Article;

        return view('articles.create', compact('article'));
    }

    public function store (ArticleRequest $request)
    {

        $this->createArticle($request);

        \Session::flash('success', 'New article created');

        return redirect()->route('home');
    }

    public function edit ($id)
    {
        $article = $this->articles->find($id);

        return view('articles.edit', compact('article'));
    }

    public function update (ArticleRequest $request, $id)
    {
        $article = $this->articles->find($id);

        $article->update($request->all());

        $tags = $request->input('tags') ? $request->input('tags') : [];
        //attach tags
        $article->tags()->sync($tags);

        \Session::flash('success', 'Article Updated');

        return redirect()->route('home');
    }

    public function createArticle(ArticleRequest $request) 
    {
        $article = \Auth::user()->articles()->create($request->all());

        $article->tags()->attach($request->input('tags'));

        event(new ArticleWasCreated($article));
    }

    public function destroy($id)
    {
        $article = $this->articles->destroy($id);

        \Session::flash('success', 'Article Deleted');

        return redirect()->route('home');
    }
}