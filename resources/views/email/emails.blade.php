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
                                      <div class="card-header">Emails</div>

                                      <div class="card-body">

                                        <table class="table mb-0">
                                          <thead>
                                            <tr>
                                              <th scope="col" style="width:100px;">#</th>
                                              <th scope="col">Name</th>
                                              <th scope="col">Body</th>
                                              <th scope="col">Created</th>
                                              <th scope="col">Updated</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($emails as $email)
                                            <tr>
                                              <th scope="row">{{ $email->id }} - <a href='/email/{{ $email->id }}' target='_blank'>View</a></th>
                                              <td>{{ $email->name }}</td>
                                              <td>{{ $email->body }}</a></td>
                                              <td>{{ $email->created_at }}</td>
                                              <td>{{ $email->updated_at }}</td>
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
