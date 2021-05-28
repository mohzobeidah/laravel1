<?php

namespace App\Console\Commands;

use App\Mail\notifyEmail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:Email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

       $emails= User::pluck('email')->toArray();
       $data=['title'=>'php','subject'=>'ssssssssssss'];
      // foreach ($emails as $email)
       //{
          // error_log('Some message here.');
           Mail::to('mohmohzobeidah@gmail.com')->send(new notifyEmail($data));
       //}


    }
}
