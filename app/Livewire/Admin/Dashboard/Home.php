<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    public function render()
    {
        $staff = Auth::user();
        $users = User::whereNot('id',$staff->id)->get();
        return view('livewire.admin.dashboard.home',[
            'users'=>$users,
            'members'=>User::whereNot('id',$staff->id)->latest()->paginate(15)
        ]);
    }
}
