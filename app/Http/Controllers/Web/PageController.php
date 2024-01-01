<?php

namespace App\Http\Controllers\Web;

use App\Models\Link;
use App\Models\Product;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

use App\Classes\Setting;

use App\Classes\Search;
use Auth;

class PageController extends Controller
{
    public function home()
    {
        /*
        foreach (Post::get() as $post) {
        $media= Media::whereCode($post->code)->first();
            if($media){
                $post->update(['avatar_id'=>$media->id]);
                echo $media->code . '</br>'; 
            }
        }
        exit;
        */
        //$query =  Product::inventory()->take(3)->orderByDesc('created_at');

        $setting    =   Setting::get();
        if ($setting->agent->isMobile()) {
            return redirect()->route('app.main');
        }
        return Auth::user() ? view('page.auth') : view('page.home');
    }   

    public function search(){
        $search = (new search('search_product'))->get();
        $query  = Product::root()->where('status', '<>', 'draft')->inventory();
        $query->search($search)->so();
        return view('page.search', compact('query'));
    }

    public function king()
    {
        return view('page.king');
    }

    
    public function request()
    {
        return view('page.request');
    }

    public function page($pretty)
    {
        $link   =   Link::findBy($pretty);
        if (empty($link)) return abort(404);

        $sw  =  Str::replaceFirst('App\\Models', 'App\\Http\\Controllers', $link->model_type);
        $sw .=  'Controller';

        return (new $sw)->show($link->model);
    }
}
