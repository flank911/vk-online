<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\VKAPI;

class checkOnline extends Controller
{

    public function check() {
        try {
            $vk = new VKAPI(6232317, 'XPiBdUrrUh0zqJjdPRB3'); // Use your app_id and api_secret

            $users = $vk->api('users.get', array(
                'uids'   => '11674338,4321',
                'fields' => 'first_name,last_name,sex'));
            $vkodata = 'test';
            foreach ($users['response'] as $user) {
                $vkodata = $user['first_name'] . ' ' . $user['last_name'] . ' (' .
                    ($user['sex'] == 1 ? 'Girl' : 'Man') . ')<br />';
            }

        } catch (VKAPI\VKException $error) {
            $vkodata = "error";
        }
        return view('vko', ['vkodata' => $vkodata]);
    }


}
