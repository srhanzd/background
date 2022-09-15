<?php

namespace App\Http\Controllers\Background;

use App\Http\Controllers\Controller;
use App\Jobs\Sendemail;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackgroundController extends Controller
{
    public function addemails(){
        for ($count = 0; $count < 1000; $count++) {
            Data::query()->create([
                'email' => 'srhanzd' .$count.'@gmail.com'
            ]);
        }
    }
    public function sendemails(){
//        $emails=Data::query()->select('email')->get();
        $emails=Data::query()->chunk(50,function ($data){
            dispatch(new Sendemail($data));
        });
        return 'we will send the email for you in the back ground you can do other things';
//        foreach ($emails as $email){
//Mail::to($email)->send(new \App\Mail\Testmail());
//        }
    }
}
