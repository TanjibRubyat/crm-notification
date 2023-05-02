<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Notifier extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User notification';

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
        $message = '3:00';
        broadcast(new \App\Events\RealTimeMessage('You have a meeting at' . ' ' . $message));
        return view('welcome');
        // return 0;
    }
}
