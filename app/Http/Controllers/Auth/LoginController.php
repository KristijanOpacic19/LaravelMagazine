<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        $this->middleware('guest')->except('logout');
    }
}
