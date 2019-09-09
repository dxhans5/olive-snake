<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funnel;

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
        return view('funnel/create-funnel');
    }

    public function saveFunnel(Request $request)
    {
      // TODO: Validate the request...

      $funnel = new Funnel;
      $funnel->name = $request->name;
      $funnel->save();

      return redirect('/funnels')->with('status', 'Funnel created!');
    }
}
