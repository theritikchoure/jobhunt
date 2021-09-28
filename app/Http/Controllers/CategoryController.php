<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;



class CategoryController extends Controller
{
    public function category()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        
        return view('admin.category', compact('category'));
    }

    public function category_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug',
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->slug = $request->slug;

        $save = $category->save();

        return back()->with('success', 'category Created!!');
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('categories')->ignore($id),],
        ]);

        $category = category::find($id);

        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return back();
    }

    public function status($id, $value)
    {
        $category = category::find($id);

        $category->status = $value;

        $category->save();

        return back();
    }

    public function delete($id)
    {
        $category = category::find($id);

        $category->delete();

        return back();
    }
}
