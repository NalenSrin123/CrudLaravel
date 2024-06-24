<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    public function addShop(){
        return view('add_shop');
    }
    public function addShopSubmit(Request $request){
        $request->validate([
            'name'=>'required|string',
            'price'=>'required',
            'qty'=>'required',
            'image'=>'required',
            'description'=>'required|string',
        ]);
        $input =$request->all();
        if($fileimg=$request->file('image')){
            $image=time().'-'.$fileimg->getClientOriginalName();
            $path='upload';
            $fileimg->move($path,$image);
            $input['image']=$image;
        }
        $res=crud::create($input);
        $res->save();
        if($res)
        return redirect('/');
    }
    public function addShopCancel(){
        return view('list');
    }
    public function crud(){
        $shop=crud::query()
                ->orderBy('id','DESC')
                ->get();
        return view('list',compact('shop'));
    }
    public function EditShop(crud $crud){

        return view('edit_shop',compact('crud'));
    }
    public function EditShopSubmit(Request $request,crud $crud){
        $input =$request->all();
        if($fileimg=$request->file('image')){
           if(empty($fileimg)){
                $input['image']=$request->old_image;
           }else{
            $image=time().'-'.$fileimg->getClientOriginalName();
            $path='upload';
            $fileimg->move($path,$image);
            $input['image']=$image;
           }
        }
        $crud->update($input);
        $crud->save();
        return redirect('/crud');
    }
    public function home(){
        $shop=crud::query()
                ->orderBy('id','DESC')
                ->paginate(4);
        return view('index',compact('shop'));
    }
    // public function DeleteShop($id){
    //    $res = crud::query()->where('id',$id)->delete();
    //    if($res)
    //    return redirect('/crud');
    // }
    public function DeleteShop(Request $request){
        $remove_id=$request->input('remove_id');
        $res = crud::query()->where('id',$remove_id)->delete();
        if($res)
        return redirect('/crud');
     }
     public function BuyProduct(crud $crud){
        return view('buyProduct',compact('crud'));
     }
     public function SearchProduct(Request $request,crud $crud){
        $crud=crud::query()->where('name','%',$crud,'%')->get();
        return redirect('/search-pro-re',compact($crud));
     }
     public function SearchProductResult(){
        return view('search');
     }


}
