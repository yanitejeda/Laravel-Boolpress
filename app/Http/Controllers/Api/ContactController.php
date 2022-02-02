<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\mail\SendContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        Mail::to(env('MAIL_CONTACT_DESTINATION'))->send(new SendContactMail($data));
    }
}
