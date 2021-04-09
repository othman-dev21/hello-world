<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request )
    {
        $category = new Category();
        $category->title = $request->get('title');
       
        $category->user()->associate($request->user());

        if($request->has('image'))
        {
            $category->image=$request->image->store('images');
        }
        
        $category->save();
        
        // return view('category.index', compact('')) ;
        return redirect('category.index');

    }


    public function index()
    {
        $categories = Category::get();

        return view('category.index', compact('categories'));
    }
}
