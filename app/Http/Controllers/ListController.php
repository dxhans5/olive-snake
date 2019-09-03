<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailList;
use Illuminate\Support\Str;


class ListController extends Controller
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

    public function showLists() {
      $list = new EmailList;
      $lists = $list->all();

      return view('list/lists', ['lists' => $lists]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createList()
    {
        $uuid = Str::uuid()->toString();

        return view('list/create-list', ['uuid' => $uuid]);
    }


    public function saveList(Request $request)
    {
      // TODO: Validate the request...

      $list = new EmailList;
      $list->name = $request->name;
      $list->vendorId = $request->vendorId;
      $list->trackingId = $request->trackingId;
      $list->hoplink = 'https://hop.clickbank.net/?affiliate=' . env('AFFILIATE_ID') . '&vendor=' . $request->vendorId . '&tid=' . $request->trackingId;
      $list->save();

      return redirect('\lists')->with('status', 'List created!');
    }
}
