@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/job" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Post</h1>
                    <p>Edit and submit this form to update a post</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="description">Post Description</label>
                                <input type="text" id="title" class="form-control" name="description"
                                       placeholder="Enter Post Title" value="{{ $job->description }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="start_date">Post Body</label>
                                <textarea id="body" class="form-control" name="start_date" placeholder="Enter Post Body"
                                          rows="5" required>{{ $job->start_date }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
