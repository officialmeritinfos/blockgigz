<?php

namespace App\Http\Controllers\Waitlist;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class Home extends Controller
{
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::find(1);

        return view('waitlist.home')->with([
            'pageName'      =>'Early Access',
            'siteName'      =>$web->name,
            'web'           =>$web
        ]);
    }
}
