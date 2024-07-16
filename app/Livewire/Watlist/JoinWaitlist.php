<?php

namespace App\Livewire\Watlist;

use App\Models\GeneralSetting;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Stevebauman\Location\Facades\Location;

class JoinWaitlist extends Component
{
    use LivewireAlert;
    #[Validate]
    public $name;
    #[Validate]
    public $accountType;
    #[Validate]
    public $email;
    public $captcha = null;
    public $newsletter;

    public function rules()
    {
        return [
            'name'=>['required','string','max:225'],
            'email'=>['required','email',Rule::unique('users','email')],
            'captcha' => ['required'],
            'accountType'=>['required','in:1,2']
        ];
    }
    public function updatedCaptcha($token)
    {
        $response = Http::post(
            'https://www.google.com/recaptcha/api/siteverify?secret='.
            config('app.recaptcha_secret').
            '&response='.$token
        );

        $success = $response->json()['success'];

        if (! $success) {
            throw ValidationException::withMessages([
                'captcha' => __('Google thinks, you are a bot, please refresh and try again!'),
            ]);
        } else {
            $this->captcha = true;
        }
    }

    //submit
    public function submit(Request $request)
    {
        $this->validate();

        try {
            //we will register the user into the system
            $ip = $request->ip();
            //check the environment
            $position = (config('app.env')=='local')?Location::get():Location::get($ip);

            $list = User::create([
                'name'=>$this->name,'email'=>$this->email,
                'accountType'=>$this->accountType,
                'registrationIp'=>$ip,
                'country'=>$position->countryName,
                'countryCode'=>$position->countryCode,
                'newsletter'=>($this->newsletter)?1:2
            ]);
            if (!empty($list)){

                event(new Registered($list));

                Auth::login($list);

                $this->alert('info', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'You have successfully joined the wait-list - Verify your email to retain your position.',
                    'width' => '400',
                ]);
                $this->reset(['accountType','name','captcha','email','newsletter']);
            }
        }catch (\Exception $exception){
            Log::info('An error occurred while joining wait-list: '.$exception->getMessage());
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'An error occurred. No worries, we are working on it.',
                'width' => '400',
            ]);
        }
    }

    public function render()
    {
        $web = GeneralSetting::find(1);

        return view('livewire.watlist.join-waitlist',[
            'siteName' => $web->name,
            'web'      => $web
        ]);
    }
}
