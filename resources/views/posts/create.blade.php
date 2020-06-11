@extends('layouts.layout')
@section('content')	
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-4">Create new post</h2>
            <form class="mb-4" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="description">Post text</label>
                    <textarea class="form-control" id="description" name="decription" rows="8"></textarea>
                </div>
                <div class="form-group">
                <label for="image">Image</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <button class="btn btn-success" type="submit" >Save</button>
            </form>
        </div>
    </div>
</div>
@endsection