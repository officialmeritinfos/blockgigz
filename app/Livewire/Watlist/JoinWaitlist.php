<?php

namespace App\Livewire\Watlist;

use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;

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

    public function rules()
    {
        return [
            'name'=>['required','string','max:225'],
            'email'=>['required','email',Rule::unique('users','email')],
            'captcha' => ['required'],
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
    public function submit()
    {
        $this->validate();

        try {

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
