<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupitems;
use App\Models\Items;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

      public function logout(){
        Auth::logout();
        return redirect('login');
      }
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

       public function del($x){
        $item=Groupitems::find($x);
        $item->delete();
        return redirect('groupitems');
    }
}
