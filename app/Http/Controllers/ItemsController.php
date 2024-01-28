<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupitems;
use App\Models\Items;
use App\Models\cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ItemsController extends Controller
{

    public function Bills(){
        return view('Bills');
    }
     
   public function ShowItemGroup(){
    $data=Groupitems::All();
    $count=$data->count();
    return view('welcome',['data'=>$data,'count'=>$count]);
   }

   public function Showproduct($id){
    $data=Items::where('itemgroupno',$id)
    ->get();
    Session::put('id',$id);
    return view('showproduct',['data'=>$data]);
   }

   public function checkout(){
    $data =cart::All();
    return view('checkout',['data'=>$data]);
}
    public function Addtocart($id){
    DB::table('cart')->insert(['idgroup'=>$id]);
    $idgroup=Session::get('id');
    $count=DB::table('cart')->get()->count();
    Session::put('countitem',$count);
    return redirect ('showproduct/'.$idgroup);
    }

//cpanel function
     public function displayadditemgroup(){
      $data=Groupitems::ALL();
      return view('dashboard.addgroupsitem',['data'=>$data]);
     }

     public function DisplayItem(){
      $data=DB::table('groupitems')
      ->join('items','groupitems.id','=','items.itemgroupno')
      ->get();
      return view('dashboard.controlpanel',['data'=>$data]);
     }

     public function displayadditem(){
      $data=Items::ALL();
      return view('dashboard.additems',['data'=>$data]);
     }
//evd cpanel function
   // Groupitems function
   public function edit($x){
        $item=Groupitems::where('id',$x)
        ->first();
        
        return view('editgroupitem',['item'=>$item]);
      }

     public function update(Request $request){
        $item=Groupitems::find($request->id);
        $item->itemgroupname=$request->namegroup;
        $item->save();
        return redirect('groupitems');
        
    }

    public function del($x){
        $item=Groupitems::find($x);
        $item->delete();
        return redirect('groupitems');
    }
    public function GetItemGroup(){
        $data=Groupitems::ALL();
       return view('itemgroup',['data'=>$data]);        

    }
    public function SaveGroupsItems(Request $request){
         $data=Groupitems::create([
         'itemgroupname'=>$request->itemgroupname
        ]);
         $data->save();
        return redirect('additem');

    }   
    //end Groupitems function

   // Items function
   public function GetItem(){
    $data=Items::All();
    $getitem=Groupitems::all();
    return view('items',['data'=>$data,'getitem'=>$getitem]); 
    }

    public function SaveItems(Request $request){
        $data=Items::create([
        'itemname'=>$request->itemname,
        'price'=>$request->price,
        'qty'=>$request->qty,
        'color'=>$request->color,
        'itemgroupno'=>$request->itemgroupno,
        'image'=>$request->image,
        ]);
        $data->save();
        return redirect('items');
}
      
public function deleta($x){
    $item=Items::find($x);
    $item->delete();
    return redirect('items');
   }
  
     public function Edite($x){
        $item=Items::where('id',$x)
        ->first();
    
       return view('edititem',['item'=>$item]);
   }

   public function Updite(Request $request){
    $item=Items::find($request->id);
    $item->itemname=$request->nameitem;
    $item->price=$request->priceitem;
    $item->color=$request->coloritem;
    $item->qty=$request->qtyitem;
    $item->save();
    return redirect('items');
   }
   //end Items function
  }