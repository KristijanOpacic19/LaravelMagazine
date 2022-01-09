<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','viewCategory','settings','allPosts','allPages','messages','allAdv']]);
        $this->middleware('permission:role-create', ['only' => ['addPost','addAdv','addPage']]);
        $this->middleware('permission:role-edit', ['only' => ['editCategory','editPost','editPage','editAdv']]);
        $this->middleware('permission:role-delete', ['only' => ['multipleDelete']]);
    }
    public function index()
    {
       $allpages = DB::table('pages')->count();
       return view('backend.index',['allpages'=>$allpages]);
    }
    public function viewCategory()
    {
        $data = DB::table('categories')->get();
        return view('backend.categories.category',['data'=>$data]);
    }
    public function editCategory($id)
    {
        $singledata = DB::table('categories')->where('cid', $id)->first();
        $data = DB::table('categories')->get();
        if($singledata == NULL){
            return redirect('viewcategory');
        }
        return view('backend.categories.editcategory',['data'=>$data,'singledata'=>$singledata]);
    }
    public function multipleDelete(Request $request)
    {
        $data = $request->except('_token');
        if($data['bulk-action'] == 0){
            session::flash('message','Please select the action you want to perform');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if(empty($data['select-data'])){
            session::flash('message','Please slecet the data you want to delete');
            return redirect()->back();
        }
        $ids = $data['select-data'];
        foreach($ids as $id){
            DB::table($tbl)->where($tblid,$id)->delete();
        }
        session::flash('message','Data deleted successfuly');
        return redirect()->back();
    }
    public function settings()
    {
        $data = DB::table('settings')->first();
        if($data){
            $data->social = explode(',', $data->social);

        }
        return view('backend.settings',['data'=>$data]);
    }
    public function addPost(){
        $categories = DB::table('categories')->get();
        return view('backend.posts.add-post',['categories'=>$categories]);
    }
    public function allPosts(){
        $posts = DB::table('posts')->paginate(20);
        foreach($posts as $post){
            $categories = explode(',',$post->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ', $postcategories);
            }
            $post->category_id = $postcat;
            $postcategories = [];
        }

        $published = DB::table('posts')->where('status','publish')->count();
        return view ('backend.posts.all-post',['posts'=>$posts,'published'=>$published]);
        
    }
    public function editPost($id){
        $data = DB::table('posts')->where('pid',$id)->first();
        $categories = DB::table('categories')->get();
        $postcat = explode(',', $data->category_id);
        return view('backend.posts.edit-post', ['data'=>$data,'categories'=>$categories,'postcat'=>$postcat]);
    }

    public function addPage(){
        return view('backend.pages.add-page');
    }
    public function allPages(){
        $posts = DB::table('pages')->get();    
        $published = DB::table('pages')->where('status','publish')->count();
        $allposts = DB::table('pages')->count();
        return view ('backend.pages.all-pages',['posts'=>$posts,'published'=>$published,'allposts'=>$allposts]);
        
    }
    public function editPage($id){
        $data = DB::table('pages')->where('pageid',$id)->first();
        return view('backend.pages.edit', ['data'=>$data]);
    }
    public function messages(){
        $data = DB::table('messages')->orderby('mid','DESC')->paginate(20);
        return view('backend.messages', ['data'=>$data]);
    }
    public function addAdv(){
        return view('backend.advertisement.add-adv');
    }
    public function allAdv(){
        $data = DB::table('advertisements')->orderby('aid','DESC')->get();
        return view('backend.advertisement.all-adv',['data'=>$data]);
    }
    public function editAdv($id){
        $data = DB::table('advertisements')->where('aid',$id)->first();
        return view('backend.advertisement.edit-adv',['data'=>$data]);
    }
}
