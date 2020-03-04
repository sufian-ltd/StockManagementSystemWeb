<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Customer;
use App\Order;
use App\Product;
use App\Supplier;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminController extends Controller
{
    public function brand(Request $request)
    {
        $name=$request->name;
        $status=$request->status;
        if(!empty($name) && !empty($status) ){
            $brand=new Brand();
            $brand->name=$name;
            $brand->status=$status;
            $brand->total_product=0;
            $brand->save();
        }
        $brand=Brand::all();
        return view('brand')->with('brand',$brand);
    }
    public function editBrand($id)
    {
        $brand=Brand::find($id);
        return view('update-brand')->with('brand',$brand);
    }
    public function updateBrand(Request $request,$id)
    {
        $brand=Brand::find($id);
        $brand->name=$request->name;
        $brand->status=$request->status;
        $brand->save();
        return redirect()->route('brand');
    }
    public function deleteBrand($id)
    {
        $brand=Brand::find($id);
        $brand->delete();
        return redirect()->route('brand');
    }

    public function category(Request $request)
    {
        $name=$request->name;
        $status=$request->status;
        if(!empty($name) && !empty($status) ){
            $category=new Category();
            $category->name=$name;
            $category->status=$status;
            $category->total_product=0;
            $category->brand=$request->brand;
            $category->save();
        }
        $category=Category::all();
        $brand=Brand::all();
        return view('category')->with('category',$category)
            ->with('brand',$brand);
    }
    public function editCategory($id)
    {
        $category=Category::find($id);
        return view('update-category')->with('category',$category);
    }
    public function updateCategory(Request $request,$id)
    {
        $category=Category::find($id);
        $category->name=$request->name;
        $category->status=$request->status;
        $category->save();
        return redirect()->route('category');
    }
    public function deleteCategory($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('category');
    }

    public function shwProduct()
    {
        // $product=Product::all();
        $product=Product::where('isdelete','=','0')->get();
        return view('product')
            ->with('product',$product);
    }

    public function addProductView(){
        $product=Product::where('isdelete','=','0')->get();
        $brand=Product::query(DB::raw("select distinct brand from products where isdelete=0"))->get();
        $category=Product::query(DB::raw("select distinct category from products where isdelete=0"))->get();
        return view('add-product')->with('product',$product)
            ->with('brand',$brand)->with('category',$category);
    }

    // public function adminProduct(Request $request)
    // {
    //     $name=$request->name;
    //     $brand=$request->brand;
    //     $category=$request->category;
    //     $newBrand=$request->newBrand;
    //     $newCategory=$request->newCategory;
    //     $status=$request->status;
    //     $unit=$request->unit;
    //     $price=$request->price;
    //     $qtn=$request->qtn;
    //     $row=$request->row;
    //     $shelf=$request->shelf;
    //     $msg="";
    //     if(($brand=="none" && $newBrand=="") || ($category=="none" && $newCategory==""))
    //         $msg="Please select or add new item...!!";
    //     else if(empty($name) ||empty($status) || empty($unit) || empty($price) || empty($qtn) || empty($row) || empty($shelf))
    //         $msg="Please Fill All...!!";
    //     if(empty($msg)){
    //         if(!empty($newBrand))
    //             $brand=$newBrand;
    //         if(!empty($newCategory))
    //             $category=$newCategory;
    //         $product=new Product();
    //         $product->brand=$brand;
    //         $product->category=$category;
    //         $product->name=$name;
    //         $product->status=$status;
    //         $product->unit=$unit;
    //         $product->price=$price;
    //         $product->qtn=$qtn;
    //         $product->row=$row;
    //         $product->shelf=$shelf;
    //         $product->save();
    //     }
    //     else
    //         alert($msg);
    //     $product=Product::all();
    //     return view('product')
    //         ->with('product',$product);
    // }
    public function saveProduct(Request $request)
    {
        $name=$request->name;
        $newBrand=$request->newBrand;
        $newCategory=$request->newCategory;
        $status=$request->status;
        $unit=$request->unit;
        $price=$request->price;
        $qtn=$request->qtn;
        $row=$request->row;
        $shelf=$request->shelf;
        
        $product=new Product();
        $product->isdelete=0;
        $product->brand=$newBrand;
        $product->category=$newCategory;
        $product->name=$name;
        $product->status=$status;
        $product->unit=$unit;
        $product->price=$price;
        $product->qtn=$qtn;
        $product->row=$row;
        $product->shelf=$shelf;
        $product->save();
        $product=Product::all();
        return view('product')
            ->with('product',$product);
    }
    public function showDeletedProductView()
    {
        $product=Product::where('isdelete','=','1')->get();
        return view('archive')
            ->with('product',$product);
    }
    public function addProduct(Request $request)
    {
        $category=Category::all();
        $brand=Brand::all();
        return view('add-product')
            ->with('category',$category)
            ->with('brand',$brand);
    }
    public function editProduct($id)
    {
        $product=Product::find($id);
        $category=Category::all();
        $brand=Brand::all();
        return view('update-product')->with('product',$product)
            ->with('category',$category)
            ->with('brand',$brand);
    }
    public function updateProduct(Request $request,$id)
    {
        $product=Product::find($id);
        $product->brand=$request->brand;
        $product->category=$request->category;
        $product->name=$request->name;
        $product->status=$request->status;
        $product->unit=$request->unit;
        $product->price=$request->price;
        $product->qtn=$request->qtn;
        $product->row=$request->row;
        $product->shelf=$request->shelf;
        $product->save();
        return redirect()->route('shwProduct');
    }
    public function deleteProduct($id)
    {
        $product=Product::find($id);
        $product->isdelete=1;
        $product->save();
        return redirect()->route('shwProduct');
    }
    public function undoDeleteProduct($id)
    {
        $product=Product::find($id);
        $product->isdelete=0;
        $product->save();
        return redirect()->route('showDeletedProductView');
    }
    public function supplier()
    {
        $supplier=Supplier::all();
        return view('suppliers')->with('supplier',$supplier);
    }
    public function addSupplier()
    {
        return view('add-supplier');
    }
    public function saveSupplier(Request $request)
    {
        $supplier=new Supplier();
        $supplier->name=$request->name;
        $supplier->email=$request->email;
        $supplier->password=$request->password;
        $supplier->contact=$request->contact;
        $supplier->address=$request->address;
        $supplier->salary=$request->salary;
        $supplier->save();

        $user=new User();
        $user->email=$request->email;
        $user->password=$request->password;
        $user->userType='supplier';
        $user->save();

        return redirect()->route('supplier');
    }

    public function order()
    {
        $order=Order::where('status','=','Order Pending')->get();
        return view('order-details-admin')
            ->with('order',$order);
    }
    public function deliverOrder($id)
    {
        $order=Order::find($id);
        $product=Product::find($order->pro_id);
        $product->qtn=$product->qtn - $order->qtn;
        $product->save();
        $order->status='Order Delivered';
        $order->save();
        return redirect()->route('order');
    }

    public function showPdf($id){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_data_to_html($id));
        return $pdf->stream();
    }

    function convert_data_to_html($id)
    {
        $customer_data = DB::table('orders')->where('id','=',$id)->get();
        $output = '
     <h3 align="center">Purchase Product Memo</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;">Description</th>
    <th style="border: 1px solid; padding:12px;">Value</th>
   </tr>
     ';
        foreach($customer_data as $customer)
        {
            $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'."Supplier Name".'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->supplier_name.'</td>
       </tr>
       <tr>
        <td style="border: 1px solid; padding:12px;">'."Customer Name".'</td>
        <td style="border: 1px solid; padding:12px;">'.$customer->customer_name.'</td>
       </tr>
       <tr>
        <td style="border: 1px solid; padding:12px;">'."Product Name".'</td>
        <td style="border: 1px solid; padding:12px;">'.$customer->product_name.'</td>
       <tr>
        <td style="border: 1px solid; padding:12px;">'."Product Quantity".'</td>
        <td style="border: 1px solid; padding:12px;">'.$customer->qtn.'</td>
       <tr>
        <td style="border: 1px solid; padding:12px;">'."Payment Type".'</td>
        <td style="border: 1px solid; padding:12px;">'.$customer->payment.'</td>
        </tr>
       <tr>
        <td style="border: 1px solid; padding:12px;">'."Total Cost".'</td>
        <td style="border: 1px solid; padding:12px;">'.$customer->cost.'</td>
        </tr>
       <tr>
        <td style="border: 1px solid; padding:12px;">'."Purchase Date".'</td>
        <td style="border: 1px solid; padding:12px;">'.$customer->date.'</td>
        </tr>
      ';
        }
        $output .= '</table>';
        return $output;
    }

    public function viewReport(){
        return view('view-report');
    }

    public function cancelOrder($id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect()->route('order');
    }

    public function customerAdmin()
    {
        $customer=Customer::all();
        return view('customer-admin')
            ->with('customer',$customer);
    }
    public function transaction()
    {
        $order=Order::where('status','=','Order Delivered')->get();
        return view('transaction')
            ->with('order',$order);
    }

    public function searchProduct(Request $request){
        $key=$request->key;
        $product=Product::where('isdelete','=','0')->where('brand','like',$key)
            ->orwhere('category','like',$key)->orwhere('name','like',$key)->get();
        return view('product')
            ->with('product',$product);
    }

    public function maintenance(){
        $products=Order::where('status','=','Order Delivered')->get()->count("id");
        $qtn=Order::where('status','=','Order Delivered')->get()->sum("qtn");
        $cost=Order::where('status','=','Order Delivered')->get()->sum("cost");
        $customer=$products;
        $supplier=Supplier::count("id");
        $salary=Supplier::sum("salary");
        return view('maintenance')->with('products',$products)
            ->with('qtn',$qtn)->with('cost',$cost)->with('customer',$customer)
            ->with('supplier',$supplier)->with('salary',$salary);
    }

}
