<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class mail extends Controller
{
    public function mail_form($data){
        echo $data;
    }
}
