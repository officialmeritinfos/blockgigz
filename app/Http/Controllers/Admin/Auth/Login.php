<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\User;
use App\Notifications\SendAdminLoginNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        return view('admin.auth.login')->with([
            'pageName'      => 'Account Login',
            'siteName'      =>$web->name,
            'web'           =>$web
        ]);
    }
    //authenticate login
    public function authenticateLogin(Request $request,$email)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }
        $user = User::where('email',$email)->first();
        $user->loggedIn=1;
        $user->save();
        Auth::login($user,true);
        $request->session()->regenerate();
        $user->notify(new SendAdminLoginNotification());

        //redirect to dashboard
        return to_route('dashboard')->with('success','Welcome to Dashboard');
    }
}
