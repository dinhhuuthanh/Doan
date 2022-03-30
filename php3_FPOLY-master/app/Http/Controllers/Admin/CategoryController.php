<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $page_size = config('common.default_page_size');
        $catesQuery = Category::where('name', 'like', "%" . $request->keyword . "%");
        $cates = $catesQuery->orderByDesc('id')->paginate($page_size);
        $cates->appends($request->except('page'));
        $cates->load('products');


        return view('admin.category.index', compact('cates'));
    }
    public function remove($id)
    {
        Product::where('cate_id', $id)->delete();
        Category::destroy($id);
        return redirect()->back();
    }
    public function addForm()
    {
        return view('admin.category.add-form');
    }
    public function saveAdd(CategoryFormRequest $request)
    {
        $model = new Category;
        $model->fill($_POST);
        if ($request->show_menu == "on") {
            $model['show_menu'] = 1;
        } else {
            $model['show_menu'] = 0;
        }

        $model->save();
        return redirect(route('category.index'));
    }
    public function editForm($id)
    {
        $cate = Category::find($id);
        return view('admin.category.edit-form', compact('cate'));
    }
    public function saveEdit($id, CategoryFormRequest $request)
    {
        $model = Category::find($id);

        if (!$model) {
            redirect(route('category.index'));
        }
        $model->fill($_POST);
        if ($request->show_menu == "on") {
            $model['show_menu'] = 1;
        } else {
            $model['show_menu'] = 0;
        }
        $model->save();
        return redirect(route('category.index'));
    }
}
