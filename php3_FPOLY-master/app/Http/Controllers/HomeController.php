<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Invoice;
use App\Models\InvoiceDetal;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function infoForm()
    {
        return view('users.info_form');
    }
    public function saveInfo(Request $request)
    {
        // dd($request->all()); die;
        $name = $request->name;
        $age = $request->age;
        $gt = "";
        if ($request->gt == 1) {
            $gt = "Nam";
        } else if ($request->gt == 2) {
            $gt = "Nữ";
        } else {
            $gt = "Khác";
        }
        $hn = $request->has('hn') ? "Đã kết hôn" : "Chưa kết hôn"; // hàm has(kiểm tra có dữ lệu hay không trả về true flase)   
        return view('users.thongtin', compact('name', 'age', 'gt', 'hn'));
    }
    public function listProducts()
    {
        $products = Product::orderByDesc('id')->paginate(5);
        $products->load('category');
        return view('products.ProductList', compact('products'));
    }
    public function addProduct()
    {
        $cate = Category::all();
        return view('products.ProductAdd', compact('cate'));
    }

    public function saveAdd()
    {
        $model = new Product;
        $model->fill($_POST);
        // dd($model); die;
        $model->save();
        return redirect()->route('products');
    }
    public function editProduct($id)
    {
        $product = Product::find($id);
        $cate = Category::all();
        return view('products.ProductEdit', compact('product', 'cate'));
    }
    public function deleteProduct($id)
    {
        // $id = $_GET['id'];
        // dd($id) ;
        $model = Product::find($id)->delete();
        return redirect()->route('products');
    }
    public function saveEdit($id)
    {

        $model = Product::find($id);
        $model->fill($_POST);
        $model->save();
        return redirect()->route('products');
    }
    public function home()
    {
        $cates = Category::where('show_menu', '=', '1')->get();
        $productNew = Product::orderBy('id', 'desc')->limit(8)->get();
        $productlatest = Product::orderBy('id', 'asc')->limit(3)->get();
        $productSale = Product::where('sale', '>', 0)->orderBy('id', 'desc')->limit(6)->get();
        return view('clients.home', compact('cates', 'productNew', 'productSale', 'productlatest'));
    }
    public function cateList($id)
    {
        $cates = Category::where('show_menu', '=', '1')->get();

        $products = Product::where('cate_id', '=', $id)->get();
        return view('clients.catesList', compact('products', 'cates'));
    }
    public function shop()
    {
        $cates = Category::where('show_menu', '=', '1')->get();
        $products = Product::all();
        return view('clients.products', compact('cates', 'products'));
    }
    public function productsDetail($id, $cate_id)
    {
        $cates = Category::where('show_menu', '=', '1')->get();
        $cate_pro = Product::where('cate_id', '=', $cate_id)->where('id', '!=', $id)->get();
        $product = Product::find($id);
        $product->load('category');
        return view('clients.productDetail', compact('cates', 'product', 'cate_pro'));
    }
    public function addToCart($id, Request $request)
    {
        $product = Product::find($id);
        $quantity = $request->quantity;
        if ($product->sale > 0) {
            $price = $product->sale;
        } else {
            $price = $product->price;
        }
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $price,
                'quantity' => $quantity,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);
        // echo "<pre>";
        // print_r(session()->get('cart'));
        return redirect(route('cart.list'));
    }
    public function listCart()
    {
        $cart = session()->get('cart');
        $cates = Category::where('show_menu', '=', '1')->get();
        return view('clients.cart', compact('cart', 'cates'));
    }
    public function removeCart($id)
    {

        $cart =  session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        $cart =  session()->get('cart');
        return redirect()->back();
    }
    public function updateCart(Request $request)
    {
        $cart = session()->get('cart');
        foreach ($_POST as $key => $value) {
            foreach ($cart as $id => $val) {
                if ($key == $id) {
                    $val['quantity'] = $value;
                    $cart[$id]['quantity'] = $val['quantity'];
                }
            }
        }
        session()->put('cart', $cart);
        return redirect()->back();
    }
    public function addinvoice(Request $request)
    {
        $cates = Category::where('show_menu', '=', '1')->get();
        $request->validate(
            [
                'name' => [
                    'required'
                ],
                'phone' => [
                    'required',
                    'numeric',
                ],
                'email' => [
                    'required',
                    'email'
                ],
                'address' => [
                    'required'
                ],
            ],
        );
        $model = new Invoice;
        $model->fill($request->all());
        $model['status'] = 1;
        $model->save();
        $IdInvoice = Invoice::all()->max();
        $cart = session()->get('cart');
        if (!empty($cart)) {
            foreach ($cart as $c) {
                $data = [
                    'invoice_id' => $IdInvoice['id'],
                    'product_id' => $c['id'],
                    'quantity' => $c['quantity'],
                    'price' => $c['price'],
                ];
                $model = new InvoiceDetal;
                $model->fill($data);
                $model->save();
            }
        }
        session()->flush('cart');
        $invoiceDetail = InvoiceDetal::where('invoice_id', $IdInvoice['id'])->get();
        $invoiceDetail->load('product');

        return view('clients.order', compact('cates', 'IdInvoice', 'invoiceDetail'));
    }
    public function listInvoices(Request $request)
    {
        $page_size = config('common.default_page_size');
        $invoiQuery = Invoice::where('name', 'like', "%" . $request->keyword . "%");
        $invois = $invoiQuery->orderByDesc('id')->paginate($page_size);
        $invois->appends($request->except('page'));
        return view('admin.order.index', compact('invois'));
    }
    public function removeInvoice($id)
    {
        Invoice::destroy($id);
        return redirect()->back();
    }
    public function editInvoice($id)
    {
        $invoice = Invoice::find($id);
        return view('admin.order.edit-form', compact('invoice'));
    }
    public function saveEditInvoice($id, Request $request)
    {
        $request->validate(
            [
                'name' => [
                    'required'
                ],
                'phone' => [
                    'numeric',
                    'required'
                ],
                'email' => [
                    'required',
                    'email'
                ],
                'address' => [
                    'required'
                ]
            ]
        );
        $model = Invoice::find($id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('invoice.index'));
    }
    public function invoiceDetai($id)
    {
        $invoice = Invoice::find($id);
        $invoiceDetail = InvoiceDetal::where('invoice_id', $id)->get();
        $invoiceDetail->load('product');
        $products = Product::all();
        
        return view('admin.order.order-detail', compact('invoice', 'invoiceDetail', 'products'));
    }
    public function removeInvoiceDl($id, $id_invoice)
    {
        InvoiceDetal::where('product_id', $id)->delete();
        $dataInvoiDl = InvoiceDetal::where('invoice_id', $id_invoice)->get();
        $total = 0;
        foreach ($dataInvoiDl as $d) {
            $total += $d['quantity'] * $d['price'];
        }
        Invoice::where('id', $id_invoice)->update(['total_price' => $total + 1]);
        return redirect()->back();
    }
    public function addProInvoice($id, Request $request)
    {
        if ($request->pro_id > 0) {
            $product = Product::find($request->pro_id);
            $data = [
                'invoice_id' => $id,
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->price
            ];
            $model = new InvoiceDetal;
            $model->fill($data);
            $model->save();
            $dataInvoiDl = InvoiceDetal::where('invoice_id', $id)->get();
            $total = 0;
            foreach ($dataInvoiDl as $d) {
                $total += $d['quantity'] * $d['price'];
            }
            Invoice::where('id', $id)->update(['total_price' => $total + 1]);
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function listOrder()
    {
        $cates = Category::where('show_menu', '=', '1')->get();
        return view('clients.order-list', compact('cates'));
    }
    public function showOrder(Request $request)
    {
        $cates = Category::where('show_menu', '=', '1')->get();
        if ($request->has('phone')) {
            $invoice = Invoice::where('phone', $request->phone)->get();
            $invoiDl = InvoiceDetal::all();
            $invoiDl->load('product');
        }
        return view('clients.order-list', compact('invoice', 'cates', 'invoiDl'));
    }
    public function updateQuantity($id, $id_invoi, Request $request)
    {
        InvoiceDetal::where('product_id', $id)->update(['quantity' => $request->quantity]);
        $id_invoice = InvoiceDetal::where('invoice_id', $id_invoi)->get();
        $total = 0;
        foreach ($id_invoice as $d) {
            $total += $d['quantity'] * $d['price'];
        }
        Invoice::where('id', $id_invoi)->update(['total_price' => $total + 1]);

        return redirect()->back();
    }
}
