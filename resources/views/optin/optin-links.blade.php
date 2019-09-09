@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body p-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-center">
                      <div class="col-md-2">
                      @include('layouts.include.navigation')
                      </div>

                      <div class="col-md-10">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                      <div class="card-header">Optin Links</div>

                                      <div class="card-body">

                                        <table class="table mb-0">
                                          <thead>
                                            <tr>
                                              <th scope="col" style="width:100px;">#</th>
                                              <th scope="col">Funnel</th>
                                              <th scope="col">IFrame</th>
                                              <th scope="col">Page Title</th>
                                              <th scope="col">Tracking ID</th>
                                              <th scope="col">Created</th>
                                              <th scope="col">Updated</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($links as $link)
                                            <tr>
                                              <th scope="row">{{ $link->id }} - <a href='/optin/{{ $link->id }}' target='_blank'>View</a></th>
                                              <td>{{ $link->funnel->name }}</td>
                                              <td><a href='{{ $link->iframe }}' target='_blank'>{{ $link->iframe }}</a></td>
                                              <td>{{ $link->page_title }}</td>
                                              <td>{{ $link->created_at }}</td>
                                              <td>{{ $link->updated_at }}</td>
                                            </tr>
                                            @endforeach
                                          </tbody>
                                        </table>

                                      </div>
                                    </div>
                                </div>
                            </div>


                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
