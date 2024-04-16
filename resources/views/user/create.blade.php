@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/user" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create a New User</h1>
                    <p>Fill and submit this form to create a user</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Name </label>
                                <input type="text" id="title" class="form-control" name="name"
                                       placeholder="Enter Name" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="email">Email </label>
                                <input type="email" id="title" class="form-control" name="email"
                                       placeholder="Enter Email" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="password">Password </label>
                                <input type="password" id="title" class="form-control" name="password"
                                       required>
                            </div>
                            <div class="control-group col-12">
                                <label for="confirm-password">Confirm Password </label>
                                <input type="password" id="title" class="form-control" name="confirm-password"
                                        required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create User
                                </button>
                            </div>
                        </div>  
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection