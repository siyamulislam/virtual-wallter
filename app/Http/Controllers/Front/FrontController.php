<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $package;
    public function home(){
        return view ('front.home.home',[
            'packages'=>Package::where('status',1)->get(),
//            'categories'=>PackageCategory::where('status',1)->get(),
        ]);
    }

    public function about()
    {
        return view('front.about.about');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }


    public function packageDetails($slug)
    {
        $this->package=Package::where('slug',$slug)->where('status',1)->first();
        $this->package->hit_count=$this->package->hit_count+1;
        $this->package->save();
        return view('front.package.details',[
            'package'=> $this->package,
        ]);
    }
    public function checkoutPage($slug)
    {
        $this->package=Package::where('slug',$slug)->first();
        return view('front.package.checkout',[
            'package'=> $this->package,
        ]);
    }
}

