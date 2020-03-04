<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Product;
use App\Supplier;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $user=User::where('email','=',$request->email)
            ->where('password','=',$request->password)
            ->first();
        $userType=$request->userType;
        if($user!=null){
             if($userType=='superadmin'){
                 return redirect()->route('superAdminHome');
             }
             else if($userType=='admin'){
                 return redirect()->route('home');
             }
             else if($userType=='supplier'){
                 $supplier=Supplier::where('email','=',$request->email)
                     ->where('password','=',$request->password)->first();
                 $request->session()->put('supplier_name',$supplier->name);
                 return view('supplier-section');
             }
        }
        return view('index');
    }
    public function home()
    {
        $brand=Product::where('isdelete','=','0')->get()->count("brand");
        $category=Product::where('isdelete','=','0')->get()->count("category");
        $productType=Product::where('isdelete','=','0')->get()->count("id");
        $product=Product::where('isdelete','=','0')->get()->sum("qtn");
        $supplier=Supplier::count("id");
        $customer=Customer::count("id");
        $pendingOrder=Order::where('status','=','Order Pending')->get()->count("id");
        $transaction=Order::where('status','=','Order Delivered')->get()->count("id");
        $archived=Product::where('isdelete','=','1')->get()->count("id");
        return view('admin-section')->with('brand',$brand)
            ->with('category',$category)->with('product',$product)
            ->with('supplier',$supplier)->with('customer',$customer)
            ->with('pendingOrder',$pendingOrder)->with('transaction',$transaction)
            ->with('productType',$productType)->with('archived',$archived);
    }

    public function superAdminHome(){
        return view('super-admin-section');
    }
    public function superAdminViewAdmin(){
        $admin=User::where('userType','=','admin')->get();
        return view('super-admin-view-admin')->with('admin',$admin);
    }

    public function superAdminViewSupplier(){
        $supplier=Supplier::all();
        return view('super-admin-view-suppliers')->with('supplier',$supplier);
    }

    public function superAdminViewCustomer(){
        $customer=Customer::all();
        return view('super-admin-view-customer')->with('customer',$customer);
    }

    public function addAdmin(Request $request){
        $email=$request->email;
        $password=$request->password;
        $userType="admin";
        if(!empty($email) && !empty($password)) {
            $user = new User();
            $user->email= $email;
            $user->password= $password;
            $user->userType = $userType;
            $user->save();
        }
        return redirect()->route('superAdminViewAdmin');
    }

    public function supermaintenance(){
        $products=Order::where('status','=','Order Delivered')->get()->count("id");
        $qtn=Order::where('status','=','Order Delivered')->get()->sum("qtn");
        $cost=Order::where('status','=','Order Delivered')->get()->sum("cost");
        $customer=$products;
        $supplier=Supplier::count("id");
        $salary=Supplier::sum("salary");
        return view('super-maintenance')->with('products',$products)
            ->with('qtn',$qtn)->with('cost',$cost)->with('customer',$customer)
            ->with('supplier',$supplier)->with('salary',$salary);
    }
}
