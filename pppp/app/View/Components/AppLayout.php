<?php

namespace App\View\Components;

use Illuminate\View\Component;
use DB;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
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
                'pages' => $pages
            ]);
            return view('layouts.app');
    }
}
