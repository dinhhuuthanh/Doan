<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::with(['category'])->latest()->paginate(3);

        return view('backend.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('backend.subcategory.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubCategory::create([
            'category_id' => $request->input('category_id'),
            'subcategory_name_en' => $request->input('subcategory_name_en'),
            'subcategory_name_vn' => $request->input('subcategory_name_vn'),
            'subcategory_slug_en' => Str::slug($request->input('subcategory_name_en')),
            'subcategory_slug_vn' => Str::slug($request->input('subcategory_name_vn')),
        ]);

        $notification = [
            'msg' => 'Tạo danh mục hàng con thành công!!!',
        ];

        return redirect()->route('subcategory.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = SubCategory::find($id);
        $categories = Category::latest()->get();
        return view('backend.subcategory.form', compact('subcategory', 'categories'));
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
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->input('subcategory_name_en'),
            'subcategory_name_vn' => $request->input('subcategory_name_vn'),
            'subcategory_slug_en' => Str::slug($request->input('subcategory_name_en')),
            'subcategory_slug_vn' => Str::slug($request->input('subcategory_name_vn')),
        ]);

        $notification = [
            'msg' => 'Cập nhật danh mục con hàng thành công!!!',

        ];

        return redirect()->route('subcategory.index')->with($notification);
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

    public function getSubCategory($category_id)
    {
        $subCategory = SubCategory::where('category_id', '=', $category_id)->orderBy('subcategory_name_en', 'ASC')->get();
    
        return json_encode($subCategory);
    }
}
