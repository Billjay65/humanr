@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>This awesome website has many features, click the button below to see them</p>
                <br>
                <a href="/job" class="btn btn-outline-primary">Show humanr</a>
                
                <h2>How To Use Font Awesome In Laravel?<h2>

                <i class="fa fa-copy medium-size"></i>
                <i class="fa fa-save"></i>
                <i class="fa fa-trash"></i>
                <i class="fa fa-home"></i>
            </div>
        </div>
    </div>
@endsection
