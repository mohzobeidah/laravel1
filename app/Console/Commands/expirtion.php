<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class expirtion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'User:expire';

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
        $users=User::where('expired',0)->get();
        foreach ($users as $user)
        {
//            $user->expired=1;
//            $user->update();
            $user->update(['expired'=>1]);
        }

    }
}
