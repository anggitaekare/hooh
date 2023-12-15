<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Contacts;

class ContactController extends Controller
{

    public function contactUser(Request $request)
    {
        $contact = new Contacts();
        $contact->email = $request->input("email");
        $contact->pertanyaan = $request->input("pertanyaan");
        $contact->save();
        return redirect('/user/homepage');
    }
}
