<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::get();
        return view('admin.category.add',compact('data'));
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
        // To insert in mass 
       
        

        // use Helper to make a string into slug 
        // $request['slug'] = make_slug($request->name);
        // Category::create($request->all());



        // to store data in database
        $category = new Category;
        $category->name = $request->name;
        $category->slug = make_slug($request->name);
        $category->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    public function categoryUpdate(Request $request)
    {
        # code...
        $category = Category::find($request->category_id);
        $category->name = $request->name;
        $category->slug = make_slug($request->slug);
        if ($category->save()) {
            # code...
            return redirect()->back()->with('warning','Something went wrong') ;
        } else {
            # code...
            return redirect()->back()->with('success','Category updated successfully') ;
        }
        

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
     $data= Category::find($id);
        $data->delete();
        return redirect()->route('category');

    }
}
