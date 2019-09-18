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
                      @include('layouts.include.forms.create-email')
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
