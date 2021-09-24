<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;



class CategoryController extends Controller
{
    public function category()
    {
        $category = Category::orderBy('id', 'DESC')->get();

        // $category = Http::get('http://127.0.0.1:8000/api/category');
        
        return view('admin.category.index', compact('category'));
    }

    public function category_add()
    {
        return view('admin.category.add');
    }

    public function category_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categorys'
        ]);

        $category = new category();

        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return back()->with('success', 'category Created!!');
    }

    public function edit($id)
    {
        $category = category::find($id);
        
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('categorys')->ignore($id),],
        ]);

        $category = category::find($id);

        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return redirect('admin/categorys');
    }

    public function status($id, $value)
    {
        $category = category::find($id);

        $category->status = $value;

        $category->save();

        return back();
    }
}
