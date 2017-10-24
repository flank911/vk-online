<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class online extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
     * @return mixed
     */
    public function handle()
    {
     $this->info('Тестовая строчка'); 
$access_token = "6e275627f68a72b77781d3da2dc49b9c188358b28cd9ba258564337689b12fec8652b03650c2187a4cf84";
    $v = "5.52";
    $user_id = 11674338;
    $fields = "last_seen";
    $url = "https://api.vk.com/method/users.get?"."access_token=".$access_token."&user_id=".$user_id."&fields=".$fields."&v=".$v;  //
    }
}
