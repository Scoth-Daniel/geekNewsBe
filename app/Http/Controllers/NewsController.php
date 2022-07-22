<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return $news;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Jalar informacion 
        $news = News::find($id);

        if(!$news){
            return response()->json([
                'success' => false,
                'data' => $news
            ], 404);  
        }

        //Find category using news.category_id and add a field with the category name
        $category = Category::find($news->category_id);
        $news['categorie']= $category->name; 

        return response()->json([
            'success' => true,
            'data' => $news
        ], 200);
    }
    
    public function findNewsByCategory($idCategory)
    {
        //Jalar informacion 
        $news = News::where('category_id', $idCategory)->get();

        if(!$news){
            return response()->json([
                'success' => false,
                'data' => $news
            ], 404);  
        }
        return response()->json([
            'success' => true,
            'data' => $news
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}