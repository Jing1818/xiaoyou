@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Post / Show #{{ $post->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('posts.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('posts.edit', $post->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Content</label>
<p>
	{{ $post->content }}
</p> <label>User_id</label>
<p>
	{{ $post->user_id }}
</p> <label>Topic_id</label>
<p>
	{{ $post->topic_id }}
</p> <label>Activity_id</label>
<p>
	{{ $post->activity_id }}
</p> <label>Reply_count</label>
<p>
	{{ $post->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $post->view_count }}
</p> <label>Order</label>
<p>
	{{ $post->order }}
</p> <label>Like_id</label>
<p>
	{{ $post->like_id }}
</p> <label>Comment_count</label>
<p>
	{{ $post->comment_count }}
</p> <label>Plate_id</label>
<p>
	{{ $post->plate_id }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
