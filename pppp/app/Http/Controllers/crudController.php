<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Post;

class crudController extends Controller
{
    public function insetData(Request $request){
        $data = $request->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']); 
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['user_id'] = $request->user()->id;

        if($request->has('social')){
            $data['social'] = implode(',',$data['social']);
        }

        if($request->hasFile('image')){
           $data['image'] = $this->uploadimage($tbl,$data['image']);
        }
        
        if($request->has('category_id')){
            $data['category_id'] = implode(',',$data['category_id']);
        }
        
        if($request->has('tags')){
            $data['tags'] = explode(", ", $data['tags']);
        }


        DB::table($tbl)->insert($data);
        if($tbl == 'messages'){
            session::flash('message','Thank you for messaging us.We will get back to you shortly.Please keep patience.');
        }else{
            session::flash('message','Data inserted successfuly');
        }
        return redirect()->back();
    }
    public function updateData(Request $request){
        $data = $request->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']); 
        $data['updated_at'] = date('Y-m-d H:i:s');

        if($request->has('social')){
            $data['social'] = implode(',',$data['social']);
        }

        if($request->hasFile('image')){
           $data['image'] = $this->uploadimage($tbl,$data['image']);
        }    

        if($request->has('category_id')){
            $data['category_id'] = implode(',',$data['category_id']);
        }

        if($request->has('tags')){
            $data['tags'] = implode(',',$data['tags']);
        }


        DB::table($tbl)->where(key($data),reset($data))->update($data);
        session::flash('message','Data updated successfuly');
        return redirect()->back();
    }

    public function uploadimage($location,$imagename){
        $name = $imagename->getClientOriginalName();
        $imagename->move(public_path().'/'.$location,date('ymdgis').$name);
        return date('ymdgis').$name;
    }    
}
