<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funnel;
use App\Models\Email;

class FunnelController extends Controller
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

    public function showFunnels() {
      $funnels = Funnel::all();

      return view('funnel/funnels', ['funnels' => $funnels]);
    }

    public function showFunnel(Request $request, $id) {
      $funnel = Funnel::where('id', $id)->first();
      return view('funnel/funnel', ['funnel' => $funnel]);
    }

    public function createFunnel()
    {
        $email = new Email;
        $emails = $email->all();

        return view('funnel/create-funnel', ['emails' => $emails]);
    }

    public function saveFunnel(Request $request)
    {
      // TODO: Validate the request...

      $funnel = new Funnel;
      $funnel->name = $request->name;
      $funnel->stage_1_email_id = $request->stage_1_email_id;
      $funnel->stage_2_email_id = $request->stage_2_email_id;
      $funnel->stage_3_email_id = $request->stage_3_email_id;
      $funnel->stage_4_email_id = $request->stage_4_email_id;
      $funnel->save();

      return redirect('/funnels')->with('status', 'Funnel created!');
    }
}
