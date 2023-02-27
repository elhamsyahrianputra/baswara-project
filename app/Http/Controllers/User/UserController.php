<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function payment() {
        return view('user.payment');
    }

    public function pay_confirm() {
        return view('user.pay_confirm');
    }

    public function kelola(Request $request) {
        $user =  $request->input('user');
        $email =  $request->input('email');
        $phone =  $request->input('phone');
        $item =  $request->input('item');

        $data = "https://api.whatsapp.com/send?phone=+6281226046970&text=Nama%20%3A%20$user%0aEmail%20%3A%20$email%0aHandphone%20%3A%20$phone%0aItem%20%3A%20$item";

        return view('user.kelola', [
            'data' => $data
        ]);
    }

    public function myProfile(Request $request){
        
    }
}
