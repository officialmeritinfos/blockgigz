<?php

namespace App\Console\Commands;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendWelcomeMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-welcome-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //fetch users
        $users = User::whereNot('welcomeSent',1)->get();
        if ($users->count()>0){
            foreach ($users as $user) {
                Mail::to($user->email)->send(new WelcomeMail($user->name));

                $user->welcomeSent=1;
                $user->save();
            }
        }
    }
}
