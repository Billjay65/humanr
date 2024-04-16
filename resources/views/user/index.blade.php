@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our Blog!</h1>
                        <p>Enjoy viewing our users. Click on a user to see details!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new User</p>
                        <a href="/user/create/user" class="btn btn-primary btn-sm">Add User</a>
                    </div>
                </div>                
                @forelse($users as $user)
                    <ul>
                        <li><a href="/user/{{ $user->id }}">{{ ucfirst($user->name) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No users available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection