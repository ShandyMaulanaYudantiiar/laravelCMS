<?php

namespace App\Http\Controllers;

use App\Models\articles;
use App\Models\categories;
use App\Http\Requests\StorearticlesRequest;
use App\Http\Requests\UpdatearticlesRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = articles::latest()->paginate(15);
    
        return view('articles.index',compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categories::all();
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorearticlesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorearticlesRequest $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required'
        ]);
    
        articles::create($request->all());
    
        return redirect()->route('article.index')
                        ->with('success','Article created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = categories::all();
        $article = articles::find($id);

        return view('articles.show',compact(['article','categories']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = categories::all();
        $article = articles::find($id);

        return view('articles.edit',compact(['article','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearticlesRequest  $request
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearticlesRequest $request, articles $articles, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required'
        ]);
    
        $articles->find($id)->update($request->all());
    
        return redirect()->route('article.index')
                        ->with('success','Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        articles::destroy($id);
    
        return redirect()->route('article.index')
                        ->with('success','Article deleted successfully');
    }
}
