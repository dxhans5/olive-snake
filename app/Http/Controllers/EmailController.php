<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Email;


class EmailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showEmails() {
      $email = new Email;
      $emails = $email->all();

      return view('email/emails', ['emails' => $emails]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createEmail()
    {
        return view('email/create-email');
    }


    public function saveEmail(Request $request)
    {
      // TODO: Validate the request...

      $email = new Email;
      $email->name = $request->name;
      $email->body = $request->body;
      $email->save();

      return redirect('\emails')->with('status', 'Email created!');
    }
}
