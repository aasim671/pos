<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->cat_name = $request->CategoryName;
        $category->status = $request->status;
        $category->save();
        return redirect('categories');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('categories');
    }















    public function store(Request $request)
    {
        $category = new Category;
        $category->cat_name = $request->CategoryName;
        $category->status = $request->status;
        $category->save();
        return redirect('categories');
    }
}
