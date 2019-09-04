<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OptinLink;
use App\Models\EmailList;

class OptinController extends Controller
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

    public function showOptinLinks() {
      $link = new OptinLink;
      $links = $link->get();

      return view('optin/optin-links', ['links' => $links]);
    }

    public function showOptin(Request $request, $id) {

      return view('optin/optin_page');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createLink()
    {
        $list = new EmailList;
        $lists = $list->all();

        return view('optin/create-optin-link', ['lists' => $lists]);
    }

    public function saveLink(Request $request)
    {
      // TODO: Validate the request...

      $link = new OptinLink;
      $link->iframe = $request->iframe;
      $link->email_list_id = $request->email_list_id;
      $link->save();

      return redirect('/optin-links')->with('status', 'Optin Link created!');
    }
}
