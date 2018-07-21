@extends('layout')

@section('content')

<div class="col-sm-8 blog-main">
    <h1>Publish a post</h1>

    <hr>
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title:</label>
            <input name="title" type="text" class="form-control" id="title" required>
            <small class="form-text text-muted">
              A name for your blog posts
            </small>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" required class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

      @include ('layouts.errors')
    </form>


</div>


@endsection
