<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Session;

class SupplierController extends Controller
{
    public function supplierHome(){
        return view('supplier-section');
    }
    public function customer(Request $request)
    {
        $name=$request->name;
        $contact=$request->contact;
        $address=$request->address;
        if(!empty($name) && !empty($contact) && !empty($address)) {
            $customer = new Customer();
            $customer->name = $name;
            $customer->contact = $contact;
            $customer->address = $address;
            $customer->save();
        }
        $customer=Customer::all();
        return view('customer')->with('customer',$customer);
    }
    public function product(Request $request,$id)
    {
        $key=$request->key;
        if(!empty($key)){
            $product=Product::where('brand','like','%'.$key.'%')
            ->orwhere('category','like','%'.$key.'%')
            ->orwhere('name','like','%'.$key.'%')
            ->get();
        }
        else{
            $product=Product::all();
        }
        return view('supplier-product')
            ->with('product',$product)
            ->with('id',$id);
    }
    public function addOrder(Request $request)
    {
        $proId=$request->proId;
        $cusId=$request->cusId;
        if($cusId==0)
            redirect()->route('customer');
        $product=Product::find($proId);
        $customer=Customer::find($cusId);
        $order=new Order();
        $order->cus_id=$cusId;
        $order->pro_id=$proId;
        $order->supplier_name=$request->session()->get('supplier_name','nothing');
        $order->customer_name=$customer->name;
        $order->product_name=$product->name;
        $order->qtn=$request->qtn;
        $order->payment='CASH ON DELIVERY';
        $order->cost=($request->qtn)*($product->price);
        $order->date=now();
        $order->status='Order Pending';
        $order->save();
        return redirect()->route('pendingOrder');
    }
    public function savePayment(Request $request){
        $proId=$request->proId;
        $cusId=$request->cusId;
        if($cusId==0)
            redirect()->route('customer');
        $product=Product::find($proId);
        $customer=Customer::find($cusId);
        $order=new Order();
        $order->cus_id=$cusId;
        $order->pro_id=$proId;
        $order->supplier_name=$request->session()->get('supplier_name','nothing');
        $order->customer_name=$customer->name;
        $order->product_name=$product->name;
        $order->qtn=$request->qtn;
        $order->payment='BKash';
        $order->cost=($request->qtn)*($product->price);
        $order->date=now();
        $order->status='Order Pending';
        $order->save();
        return redirect()->route('pendingOrder');
    }
    public function addPaymentView(Request $request){
        if($request->payment == 'cash'){
            $proId=$request->proId;
            $cusId=$request->cusId;
            if($cusId==0)
                redirect()->route('customer');
            $product=Product::find($proId);
            $customer=Customer::find($cusId);
            $order=new Order();
            $order->cus_id=$cusId;
            $order->pro_id=$proId;
            $order->supplier_name=$request->session()->get('supplier_name','nothing');
            $order->customer_name=$customer->name;
            $order->product_name=$product->name;
            $order->qtn=$request->qtn;
            $order->payment='CASH ON DELIVERY';
            $order->cost=($request->qtn)*($product->price);
            $order->date=now();
            $order->status='Order Pending';
            $order->save();
            return redirect()->route('pendingOrder');
        }
        else {
            $proId = $request->proId;
            $cusId = $request->cusId;
            $supplier_name = $request->session()->get('supplier_name', 'nothing');
            if ($cusId == 0)
                redirect()->route('customer');
            $product = Product::find($proId);
            $customer = Customer::find($cusId);
            $qtn = $request->qtn;
            $cost = ($request->qtn) * ($product->price);
            return view('order-payment')->with('product', $product)
                ->with('customer', $customer)->with('supplier', $supplier_name)
                ->with('qtn', $qtn)->with('cost', $cost)
                ->with('cusId',$cusId)->with('proId',$proId);
        }
    }
    public function pendingOrder()
    {
        $order=Order::where('status','=','Order Pending')->get();
        return view('order-details')
            ->with('order',$order);
    }
    public function approvedOrder()
    {
        $order=Order::where('status','=','Order Delivered')->get();
        return view('order-details')
            ->with('order',$order);
    }
    public function cancelOrderSupplier($id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect()->route('pendingOrder');
    }
}
