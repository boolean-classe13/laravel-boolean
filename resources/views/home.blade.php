@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Benvenuto</h1>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-title', 'Homepage')
