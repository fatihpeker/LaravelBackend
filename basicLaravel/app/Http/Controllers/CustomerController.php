<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Basket;
use App\Models\Product;
class CustomerController extends Controller
{
    //Müşteri kayıt işlemleri
    public function CustomerSingUp(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required'
        ]);
        $customer = new Customer();
        $customer->name = $request->post('name');
        $customer->email = $request->post('email');
        $customer->password = $request->post('password');
        $customer->status = $request->post('status');
        $customer->phone = $request->post('phone');
        $customer->save();
        $output="Kayit Basarili";
        echo json_encode($output);
        return;
    }

    //Müşteri giriş işlemleri
    public function CustomerLogin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $customer=Customer::where('email',$request->post('email'))->where('password',$request->post('password'))->get();
        if (count($customer) == 0){
            $output="Giris Başarısız";
            echo json_encode($output);
            return;
        }
        $output="Giris Basarili";
        echo json_encode($output);
        return;
    }

    //Sepete ürün ekleme
    public function AddProductBasket(Request $request){
        $basket = new Basket();
        $basket->customer_id=$request->post('customer_id');
        $basket->product_id=$request->post('product_id');
        $basket->save();
        $output="Urun Sepete Eklendi";
        echo json_encode($output);
        return;
    }
    //Sepetten ürün Çıkarma
    public function RemoveProductBasket(Request $request){
        Basket::where('customer_id',$request->post('id'))->where('product_id',$request->post('product_id'))->delete();
        $output="Urun Sepetten Cikarildi";
        echo json_encode($output);
        return;
    }

    //Sepetteki ürünleri görüntüleme
    /*
     * !!!!!!!!!!!
     *inner join veya many to many tablo ilşkisi kullanmak şuan daha mantıklı
     * fakat hata aldığım için şuan basit sorgularla yazdım
     * buraya geri döneceğim
     */
    public function ShowBasket(Request $request){
        $basket=Basket::where('customer_id',$request->post('id'))->get();
        $products=array(array());
        foreach ($basket as $key=>$item){
            $products[$key]=Product::where('id',$item->product_id)->first();
        }
        echo json_encode($products);
        return;
        /*$basket=Basket::where('customer_id',$request->post('id'))->get();
        echo json_encode($basket->getProduct);*/
       /* $basket = Basket::join('basket', $request->post('id'), '=', 'basket.customer_id')
            ->join('products',  $request->post('id'), '=', 'products.id')
            ->select('products.*')
            ->get();
        echo json_encode($basket);
        return;*/
    }
}
