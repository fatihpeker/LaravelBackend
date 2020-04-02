<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    //Tüm ürünleri getirmek
    public function index(){
        $products=Product::all();
        $data=array(array());
        foreach ($products as $key=>$item){
            $data[$key]=array(
                'id'=>$item->id,
                'name'=>$item->name,
                'category_id'=>$item->category_id,
                'status'=>$item->status,
                'price'=>$item->price,
                'stock'=>$item->stock,
                'description'=>$item->description
            );
        }
        echo json_encode($data);
        return;
    }
    //tüm kategorileri getirir
    public function getCategory(){
        $categories=Category::all();
        $data=array(array());
        foreach ($categories as $key=>$item){
            $data[$key]=array(
                'id'=>$item->id,
                'name'=>$item->name,
                'status'=>$item->status,
                'description'=>$item->description
            );
        }
        echo json_encode($data);
        return;
    }
    //Belirli bir kategorideki tüm ürünleri getirir
    public function productByCategory(Request $request){
        $category_id=$request->post('category_id');
        $products=Product::where('category_id',$category_id)->get();
        $data=array(array());
        $data=array(array());
        foreach ($products as $key=>$item){
            $data[$key]=array(
                'id'=>$item->id,
                'name'=>$item->name,
                'category_id'=>$item->category_id,
                'status'=>$item->status,
                'price'=>$item->price,
                'stock'=>$item->stock,
                'description'=>$item->description
            );
        }
        echo json_encode($data);
        return;
    }
}
