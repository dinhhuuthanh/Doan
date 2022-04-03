<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $categories = Category::paginate(3);
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file('category_image')) {
            $upload_location = 'upload/categories/';
            $file = $request->file('category_image');
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(600, 600)->save($upload_location . $name_gen);
            $save_url = $upload_location . $name_gen;

            Category::create([
                'category_name_en' => $request->input('category_name_en'),
                'category_name_vn' => $request->input('category_name_vn'),
                'category_slug_en' => Str::slug($request->input('category_name_en')),
                'category_slug_vn' => Str::slug($request->input('category_name_vn')),
                'category_image' => $save_url
            ]);
        } else {
            Category::create([
                'category_name_en' => $request->input('category_name_en'),
                'category_name_vn' => $request->input('category_name_vn'),
                'category_slug_en' => Str::slug($request->input('category_name_en')),
                'category_slug_vn' => Str::slug($request->input('category_name_vn')),
            ]);
        }

        $notification = [
            'msg' => 'Tạo danh mục hàng thành công!!!',
        ];

        return redirect()->route('category.index')->with($notification);
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
        $category = Category::find($id);
        return view('backend.category.form', compact('category'));
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
        $category = Category::find($id);
        if ($request->file('category_image')) {
            if ($category->category_image != 'default.jpg') {
                unlink($category->category_image);
            }
            $upload_location = 'upload/categories/';
            $file = $request->file('category_image');
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(600, 600)->save($upload_location . $name_gen);
            $save_url = $upload_location . $name_gen;

            $category->update([
                'category_name_en' => $request->input('category_name_en'),
                'category_name_vn' => $request->input('category_name_vn'),
                'category_slug_en' => Str::slug($request->input('category_slug_en')),
                'category_slug_vn' => Str::slug($request->input('category_slug_vn')),
                'category_icon' => $request->input('category_icon'),
                'category_image' => $save_url
            ]);
        } else {
            $category->update([
                'category_name_en' => $request->input('category_name_en'),
                'category_name_vn' => $request->input('category_name_vn'),
                'category_slug_en' => Str::slug($request->input('category_slug_en')),
                'category_slug_vn' => Str::slug($request->input('category_slug_vn')),
                'category_icon' => $request->input('category_icon'),
            ]);
        }

        $notification = [
            'msg' => 'Cập nhật danh mục hàng thành công!!!',

        ];

        return redirect()->route('category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->category_image != 'default.jpg') {
            unlink($category->category_image);
        }
        $category->delete();

        $notification = [
            'msg' => ' Xóa danh mục thành công!!!',

        ];

        return redirect()->route('category.index')->with($notification);
    }


    
}
