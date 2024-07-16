<?php

namespace App\Livewire\Admin\Auth;

use App\Models\GeneralSetting;
use App\Models\User;
use App\Notifications\SendAdminTwoFactorMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;

    #[Validate]
    public $email;
    #[Validate]
    public $password;
    public $showTwoFactorNotice=false;

    public function render()
    {
        $web = GeneralSetting::find(1);

        return view('livewire.admin.auth.login',[
            'web'=>$web
        ]);
    }

    public function rules()
    {
        return [
            'email'=>['required','email',Rule::exists('users','email')->where('isAdmin',1)],
        ];
    }
    //authenticate login
    public function authenticateLogin()
    {
        $this->validate();

        try {
            $user = User::where('email',$this->email)->where('isAdmin',1)->first();
            if (empty($user)){
                $this->alert('error', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Invalid Login detail',
                    'width' => '400',
                ]);
            }
            //send login notification
            $user->notify(new SendAdminTwoFactorMail($user));
            $this->alert('success', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Verify this login attempt from your registered email to continue',
                'width' => '400',
            ]);
            $this->reset('email');
            return;
        }catch (\Exception $exception){
            Log::info('An error occurred while logging in :'.$exception->getMessage());
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'An error occurred. No worries, we are working on it.',
                'width' => '400',
            ]);
        }
    }
}
