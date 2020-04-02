<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Category;
class AdminController extends Controller
{
    //Admin kontrol işlemleri
    public function AdminLogin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'admin_key' => 'admin_key',
        ]);
        $admin=Admin::where('email',$request->post('email'))->where('admin_key',$request->post('admin_key'))->get();
        if (count($admin) == 0){
            $output="Giris Başarısız";
            echo json_encode($output);
            return;
        }
        $output="Giris Basarili";
        echo json_encode($output);
        return;
    }

    //Müşterileri listeleme
    public function GetAllCustomer(){
        $customers=Customer::all();
        echo json_encode($customers);
        return;
    }

    //Ürün ekleme servisi
    public function AddNewProduct(Request $request){
        $newProduct=new Product();
        $newProduct->name=$request->post('name');
        $newProduct->category_id=$request->post('category_id');
        $newProduct->status=$request->post('status');
        $newProduct->price=$request->post('price');
        $newProduct->stock=$request->post('stock');
        $newProduct->description=$request->post('description');
        $newProduct->save();
        $output="Yeni Urun Eklendi";
        echo json_encode($output);
        return;
    }

    //Ürün silme servisi
    public function RemoveProduct(Request $request){
        Product::where('id',$request->post('id'))->delete();
        $output="Urun Silindi";
        echo json_encode($output);
        return;
    }

    //Ürünleri güncelleme servisi
    public function UpdateProduct(Request $request){
        $product=Product::find($request->post('id'));
        if ($request->post('name')!=null){$product->name=$request->post('name');}
        if ($request->post('category_id')!=null){$product->category_id=$request->post('category_id');}
        if ($request->post('status')!=null){$product->status=$request->post('status');}
        if ($request->post('price')!=null){$product->price=$request->post('price');}
        if ($request->post('stock')!=null){$product->stock=$request->post('stock');}
        if ($request->post('description')!=null){$product->description=$request->post('description');}
        $product->save();
        $output="Urun Guncellendi";
        echo json_encode($output);
        return;
    }

    //Yeni Kategori Ekleme Servisi
    public function AddNewCategory(Request $request){
        $newCategory=new Category();
        $newCategory->name=$request->post('name');
        $newCategory->status=$request->post('status');
        $newCategory->description=$request->post('description');
        $newCategory->save();
        $output="Yeni Kategori Eklendi";
        echo json_encode($output);
        return;
    }

    //Kategori silme servisi
    public function RemoveCategory(Request $request){
        Category::where('id',$request->post('id'))->delete();
        $output="Kategori Silindi";
        echo json_encode($output);
        return;
    }

    //Kategori Güncelleme Servisi
    public function UpdateCategory(Request $request){
        $category=Category::find($request->post('id'));
        if ($request->post('name')!=null){$category->name=$request->post('name');}
        if ($request->post('status')!=null){$category->status=$request->post('status');}
        if ($request->post('description')!=null){$category->description=$request->post('description');}
        $category->save();
        $output="Kategori Guncellendi";
        echo json_encode($output);
        return;
    }
}
