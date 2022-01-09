<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use DB;
use Newsletter;
use Session;


class BlogController extends Controller
{
        public function __construct(){
            $categories = DB::table('categories')->where('status','on')->get();
            $setting = DB::table('settings')->first();
            $pages = DB::table('pages')->where('status','publish')->get();
            if($setting){
                $setting->social = explode(',', $setting->social);
                foreach($setting->social as $social){
                    $icon = explode('.',$social);
                    $icon = $icon[1];
                    $icons[] = $icon;
                }
                
            }else{
                $icons = [];
            }
            view()->share([
                'categories' => $categories,
                'setting' => $setting,
                'icons' => $icons,
                'pages'=>$pages
            ]);
        }
        public function index()
        {
            $featured = DB::table('posts')->where('category_id','LIKE','%9%')->orderby('pid','DESC')->latest()->get();
            $latest = DB::table('posts')->orderby('pid','DESC')->latest()->take(10)->get();
            $trending = DB::table('posts')->where('category_id','LIKE','%10%')->orderby('pid','DESC')->latest()->get();
            $technology = DB::table('posts')->where('category_id','LIKE','%4%')->orderby('pid','DESC')->latest()->get();
            $style = DB::table('posts')->where('category_id','LIKE','%7%')->orderby('pid','DESC')->latest()->get();
            $sport = DB::table('posts')->where('category_id','LIKE','%5%')->orderby('pid','DESC')->latest()->get();
            $popular = DB::table('posts')->orderby('views','DESC')->get();
            $pages = DB::table('pages')->where('status','publish')->get();
            $sidebarBottom = DB::table('advertisements')->where('status','display')->where('location','sidebar-bottom')->orderBy('aid','DESC')->first();

            $data = DB::table('posts')->get();

            $tag = DB::table('posts')->orderby('tags','DESC')->get()->toArray();
                
            foreach($featured as $feature){
                $users = explode(',',$feature->user_id);
                foreach($users as $user){
                    $populauser = DB::table('users')->where('id',$user)->value('name');
                    $populausers[] = $populauser;
                    $populauser = implode(', ', $populausers);
                }
            $feature->user_id = $populauser;
            $populausers = [];
            }

            foreach($technology as $technolog){
                $users = explode(',',$technolog->user_id);
                foreach($users as $user){
                    $populauser = DB::table('users')->where('id',$user)->value('name');
                    $populausers[] = $populauser;
                    $populauser = implode(', ', $populausers);
                }
            $technolog->user_id = $populauser;
            $populausers = [];
            }

            foreach($style as $styl){
                $users = explode(',',$styl->user_id);
                foreach($users as $user){
                    $populauser = DB::table('users')->where('id',$user)->value('name');
                    $populausers[] = $populauser;
                    $populauser = implode(', ', $populausers);
                }
            $styl->user_id = $populauser;
            $populausers = [];
            }

            
            foreach($popular as $popula){
                $categories = explode(',',$popula->category_id);
                foreach($categories as $cat){
                    $populacat = DB::table('categories')->where('cid',$cat)->value('title');
                    $populacategories[] = $populacat;
                    $populacat = implode(', ', $populacategories);
                }
            $popula->category_id = $populacat;
            $populacategories = [];

            $users = explode(',',$popula->user_id);
                foreach($users as $user){
                    $populauser = DB::table('users')->where('id',$user)->value('name');
                    $populausers[] = $populauser;
                    $populauser = implode(', ', $populausers);
                }
            $popula->user_id = $populauser;
            $populausers = [];
            }

            foreach($latest as $lates){
                $categories = explode(',',$lates->category_id);
                foreach($categories as $cat){
                    $latescat = DB::table('categories')->where('cid',$cat)->value('title');
                    $latescategories[] = $latescat;
                    $latescat = implode(', ', $latescategories);
                }
            $lates->category_id = $latescat;
            $latescategories = [];

            $users = explode(',',$lates->user_id);
            foreach($users as $user){
                $populauser = DB::table('users')->where('id',$user)->value('name');
                $populausers[] = $populauser;
                $populauser = implode(', ', $populausers);
            }
            $lates->user_id = $populauser;
            $populausers = [];
            }

            foreach($trending as $trend){
                $categories = explode(',',$trend->category_id);
                foreach($categories as $cat){
                    $trendcat = DB::table('categories')->where('cid',$cat)->value('title');
                    $trendcategories[] = $trendcat;
                    $trendcat = implode(', ', $trendcategories);
                }
            $trend->category_id = $trendcat;
            $trendcategories = [];

            }

            foreach($sport as $spor){
                $categories = explode(',',$spor->category_id);
                foreach($categories as $cat){
                    $sporcat = DB::table('categories')->where('cid',$cat)->value('title');
                    $sporcategories[] = $sporcat;
                    $sporcat = implode(', ', $sporcategories);
                }
            $spor->category_id = $sporcat;
            $sporcategories = [];

            $users = explode(',',$spor->user_id);
            foreach($users as $user){
                $populauser = DB::table('users')->where('id',$user)->value('name');
                $populausers[] = $populauser;
                $populauser = implode(', ', $populausers);
            }
            $spor->user_id = $populauser;
            $populausers = [];
            }
            

            return view('blog.index',
            ['featured'=>$featured,
            'latest'=>$latest,
            'trending'=>$trending,  
            'technology'=>$technology,
            'style'=>$style,
            'sport'=>$sport,
            'popular'=>$popular,
            'data'=>$data,
            'tag'=>$tag,
            'pages'=>$pages,
            'sidebarBottom'=> $sidebarBottom
            ]);
        }
        public function category($slug){
            $cat = DB::table('categories')->where('slug',$slug)->first();
            $latest = DB::table('posts')->orderby('pid','DESC')->latest()->take(10)->get();
            $posts = DB::table('posts')->where('category_id','LIKE','%'.$cat->cid.'%')->paginate(8);
            $sidebarBottom = DB::table('advertisements')->where('status','display')->where('location','sidebar-bottom')->orderBy('aid','DESC')->first();

            foreach($posts as $post){
                $users = explode(',',$post->user_id);
                foreach($users as $user){
                    $populauser = DB::table('users')->where('id',$user)->value('name');
                    $populausers[] = $populauser;
                    $populauser = implode(', ', $populausers);
                    }
                $post->user_id = $populauser;
                $populausers = [];
            }
            foreach($latest as $lates){
                $users = explode(',',$lates->user_id);
                foreach($users as $user){
                    $populauser = DB::table('users')->where('id',$user)->value('name');
                    $populausers[] = $populauser;
                    $populauser = implode(', ', $populausers);
                    }
                $lates->user_id = $populauser;
                $populausers = [];
            }

            return view('blog.category',['posts'=>$posts,'cat'=>$cat,'latest'=>$latest,'sidebarBottom'=> $sidebarBottom]);
        }
        public function article(Request $request,$slug, $postId){
            $data = DB::table('posts')->where('slug', $slug)->first();
            $posts = DB::table('posts')->where('slug', $slug)->get();
            $latest = DB::table('posts')->orderby('pid','DESC')->latest()->take(10)->get();
            $related = DB::table('posts')->where('category_id','LIKE','%'.$data->category_id.'%')->get();
            $detail = Post::find($postId);
            $tags = DB::table('posts')->where('slug', $slug)->get();

            $counter = DB::table('posts')->where('slug', $slug)->increment('views');


            $sidebarBottom = DB::table('advertisements')->where('status','display')->where('location','sidebar-bottom')->orderBy('aid','DESC')->first();
            
            foreach($posts as $post){
                $categories = explode(',',$post->category_id);
                foreach($categories as $cat){
                    $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                    $postcategories[] = $postcat;
                    $postcat = implode(', ', $postcategories);
                }
            $post->category_id = $postcat;
            $postcategories = [];
            
            $users = explode(',',$post->user_id);
            foreach($users as $user){
                $populauser = DB::table('users')->where('id',$user)->value('name');
                $populausers[] = $populauser;
                $populauser = implode(', ', $populausers);
            }
            $post->user_id = $populauser;
            $populausers = [];

        }
        $tags = explode(",",$post->tags);
            foreach($latest as $lates){
                $users = explode(',',$lates->user_id);
                foreach($users as $user){
                    $populauser = DB::table('users')->where('id',$user)->value('name');
                    $populausers[] = $populauser;
                    $populauser = implode(', ', $populausers);
                    }
                $lates->user_id = $populauser;
                $populausers = [];
            }
            foreach($related as $relate){
                $users = explode(',',$relate->user_id);
                foreach($users as $user){
                    $populauser = DB::table('users')->where('id',$user)->value('name');
                    $populausers[] = $populauser;
                    $populauser = implode(', ', $populausers);
                    }
                $relate->user_id = $populauser;
                $populausers = [];
            }


            $setting = DB::table('settings')->first();
            if($setting){
                $setting->social = explode(',', $setting->social);
                foreach($setting->social as $social){
                    $icon = explode('.',$social);
                    $icon = $icon[1];
                    $icons[] = $icon;
                }
                
            }else{
                $icons = [];
            }
            return view('blog.article',[
                'data'=>$data,
                'posts'=>$posts,
                'setting' => $setting,
                'icons' => $icons,
                'latest'=> $latest,
                'related'=>$related,
                'counter'=>$counter,
                'detail'=>$detail,
                'sidebarBottom'=> $sidebarBottom,
                'tags'=>$tags
  
            ]);
        }

        public function page($slug){
            $data = DB::table('pages')->where('slug',$slug)->first();
            return view('blog.page',['data'=>$data]);
        }

        public function contactUs(){
            $setting = DB::table('settings')->first();
            $settings = DB::table('settings')->get();
            if($setting){
                $setting->social = explode(',', $setting->social);
                foreach($setting->social as $social){
                    $icon = explode('.',$social);
                    $icon = $icon[1];
                    $icons[] = $icon;
                }
                
            }else{
                $icons = [];
            }
            return view('blog.contact',['setting' => $setting,'settings'=>$settings]);
        }

        public function search(Request $request){
            $search = $request->input('search');

            $posts = DB::table('posts')
                ->where('title', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->orWhere('tags', 'LIKE', "%{$search}%")
                ->get();

                foreach($posts as $post){
                    $users = explode(',',$post->user_id);
                    foreach($users as $user){
                        $populauser = DB::table('users')->where('id',$user)->value('name');
                        $populausers[] = $populauser;
                        $populauser = implode(', ', $populausers);
                        }
                    $post->user_id = $populauser;
                    $populausers = [];
                }           
        
            return view('blog.search', compact('posts'));
        }
        public function store(Request $request){
            $request->validate([
                'user_email' => 'required'
            ]);
            if ( ! Newsletter::isSubscribed($request->user_email) ) {
                Newsletter::subscribePending($request->user_email);
                return redirect('/home')->with('status','Thanks for subscription');
            }
            return redirect('/home')->with('status','You are already subscribed!');
        }
        public function save_comment(Request $request,$slug,$id){
            $request->validate([
                'comment'=>'required'
            ]);
            
            $ddata=new Comment;
            $ddata->user_id=$request->user()->id;
            $ddata->post_pid=$id;
            $ddata->comment=$request->comment;
            $ddata->save();
            return back();
        }

}
