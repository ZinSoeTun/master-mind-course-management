<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //category page direction
    public function creCategoryPage()
    {
        return view('admin.category.createCategory');
    }

    //create the category
    public function creCate(Request $request)
    {
        // dd($request->toArray());
        Validator::make($request->all(),[
            'categoryName' => 'required|max:125',
        ])->validate();

        Category::create([
            'name' => $request->categoryName,
        ]);

        return back()->with(['success' => 'Category has been successfully created!']);
    }

    //list of the categories
    public function cateList()
    {
       $categories =  Category::paginate(5);
       return view('admin.category.categoriesList', compact('categories'));
    }

    //update the categories page direction
    public function updateCatePage($id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.category.editCategory', compact('category'));
    }

    //update the category with depend on id
    public function updateCate(Request $request, $id)
    {
       Validator::make($request->all(),[
        'categoryName' => 'required'
       ])->validate();

        Category::where('id',$id)->update([
            'name' => $request->categoryName
        ]);

        return back()->with(['success'=> 'Category has been successfully updated!']);
    }

    //delete the category depend on id
    public function deleCate($id)
    {
        Category::where('id',$id)->delete();
        return back()->with(['success'=> 'Category has been successfully deleted!']);
    }

}
