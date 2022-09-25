<?php

namespace App\Http\Controllers;

use App\Models\Catagory;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Session;
class FormController extends Controller
{
   
    public function show_form(){
        $data['subcatagory'] = Catagory::where('sub_catagory',null)->get();
        return view('form',$data);
        //   dd($data);
       
        
    }

    public function store_record(Request $request){
        

        $request->validate([
            'catagory'=> 'string|required',
            
            
        ]);
        $data = $request->all();
        $data_r = Catagory::create($data);
        if($data_r){
           echo "data saved";
        }else{
            echo "Some error on saving";

        }
    }

   

    public function adminform(){
        return view('form');
    }

   public function show(){
    $data['forms'] = DB::table('forms')->get();
    // dd($data);
    return view('hello',$data);
   }

   public function delete($id)
   {
    // $del_item = DB::table('forms')->where('id',$id)->delete();
    // if($del_item){
    //     return response()->json([
    //         'status'=> 'deleted successfully'
    //     ]);
    // }

    $del = DB::table('forms')->delete($id);
    // $del->delete();
    return response()->json([
                'status'=> 'deleted successfully'
            ]);

   }

   public function changeS(Request $request)
    {
       
      $d = Form::where('id',$request->data_id)->update(['willtowor'=>$request->willtowor]);
    if($d){
        return response()->json([
            'status' => 1
        ]);
    }
   }


}
