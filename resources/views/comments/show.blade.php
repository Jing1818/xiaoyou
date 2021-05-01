@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Comment / Show #{{ $comment->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('comments.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('comments.edit', $comment->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Post_id</label>
<p>
	{{ $comment->post_id }}
</p> <label>Content</label>
<p>
	{{ $comment->content }}
</p> <label>From_uid</label>
<p>
	{{ $comment->from_uid }}
</p> <label>Comment_type</label>
<p>
	{{ $comment->comment_type }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
