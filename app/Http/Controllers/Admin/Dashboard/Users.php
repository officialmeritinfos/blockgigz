<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class Users extends Controller
{
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::find(1);

        return view('admin.dashboard.home')->with([
            'pageName'          =>'Dashboard',
            'siteName'          =>$web->name,
            'web'               =>$web
        ]);
    }
}
