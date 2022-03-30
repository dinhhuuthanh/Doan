<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProducFormRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $page_size = config('common.default_page_size');
        //Nhận dữ liệu từ form gửi lên và thực hiện filter
        $productQuery = Product::where('name', 'like', "%" . $request->keyword . "%");
        if ($request->has('cate_id') && $request->cate_id > 0) {
            $productQuery = $productQuery->where('cate_id', $request->cate_id);
        }
        if ($request->has('order_by') && $request->order_by > 0) {
            if ($request->order_by == 1) {
                $productQuery->orderBy('name');
            } else if ($request->order_by == 2) {
                $productQuery->orderByDesc('name');
            } else if ($request->order_by == 3) {
                $productQuery->orderBy('price');
            } else if ($request->order_by == 4) {
                $productQuery->orderByDesc('price');
            } else if ($request->order_by == 5) {
                $productQuery->orderBy('quantity');
            } else {
                $productQuery->orderByDesc('quantity');
            }
        }
        //Dựa vào model Product lấy toàn bộ dữ liệu trong db
        $cates = Category::all();
        $products = $productQuery->orderByDesc('id')->paginate($page_size);
        $products->appends($request->except('page'));
        //Sinh ra màn hình danh sách với dữ liệu lấy được
        return view('admin.product.index', [
            'product_data' => $products,
            'cates' => $cates
        ]);
    }
    public function remove($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }
    public function addForm()
    {
        $cates = Category::all();
        return view('admin.product.add-form', compact('cates'));
    }
    public function saveAdd(ProducFormRequest $request)
    {
        $model = new Product;
        //gán giá trị cho các thuộc tính của object
        $model->fill($_POST);
        // dd($model);
        if ($request->hasFile('file_upload')) {
            // $request->file_upload->store('public\uploads\products');
            $name = uniqid(). '-' . $request->file('file_upload')->getClientOriginalName();
            $request->file('file_upload')->storeAs(
                'public\uploads\products',$name
            );
            $model['image'] = 'uploads/products/'. $name;
        } 
        $model['status'] = "1";
        $model->save();
        return redirect(route('product.index'));
    }
    public function editForm($id){
        $product = Product::find($id);
        $cates = Category::all();
        return view('admin.product.edit-form', compact('cates','product'));
    }
    public function saveEdit($id, ProducFormRequest $request){
        $model = Product::find($id);
        if(!$model){
            return redirect(route('product.index'));
        }
        $model->fill($request->all());
        if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/products', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('product.index'));
    }
}
