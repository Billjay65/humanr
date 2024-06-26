@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/user" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($user->name) }}</h1>
                <p>{!! $user->email !!}</p> 
                <hr>
                <a href="/user/{{ $user->id }}/edit" class="btn btn-outline-primary">Edit User</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete User</button>
                </form>
            </div>
        </div>
    </div>
@endsection
