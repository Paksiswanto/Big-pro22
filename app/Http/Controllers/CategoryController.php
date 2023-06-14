<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function category_index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
    public function category_add()
    {
        $category_type = CategoryType::all();
        $category = Category::all();
        return view('category.add',compact('category','category_type'));
    }
    public function create_category(Request $request)
    {
        Category::create($request->all());

        return redirect('/category')->with('success', 'Data berhasil ditambahkan.');
    }
    public function category_edit($id)
    {
        $category = Category::find($id);
        $categoryTypes = CategoryType::all();
        return view('category.edit', compact('category', 'categoryTypes'));
    }

    public function edit_category(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request->input('name'),
            'parent' => $request->input('parent'),
            'color' => $request->input('color'),
            'category_type_id' => $request->input('category_type'),
        ]);
    
        return redirect('/category')->with('success', 'Data berhasil diperbarui');
    }    
    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
