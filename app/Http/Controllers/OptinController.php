<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OptinLink;
use App\Models\Funnel;

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
      $links = OptinLink::all();

      return view('optin/optin-links', ['links' => $links]);
    }

    public function showOptin(Request $request, $id) {
      $link = OptinLink::where('id', $id)->first();
      return view('optin/optin_page', ['link' => $link]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createLink()
    {
        $funnels = Funnel::all();

        return view('optin/create-optin-link', ['funnels' => $funnels]);
    }

    public function saveLink(Request $request)
    {
      // TODO: Validate the request...

      $link = new OptinLink;
      $link->iframe = $request->iframe;
      $link->page_title = 'Xixxix LLC - ' . $request->title;
      $link->funnel_id = $request->funnel_id;
      $link->save();

      return redirect('/optin-links')->with('status', 'Optin Link created!');
    }
}
