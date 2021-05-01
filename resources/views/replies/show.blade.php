@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Reply / Show #{{ $reply->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('replies.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('replies.edit', $reply->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Comment_id</label>
<p>
	{{ $reply->comment_id }}
</p> <label>Reply_type</label>
<p>
	{{ $reply->reply_type }}
</p> <label>Content</label>
<p>
	{{ $reply->content }}
</p> <label>From_uid</label>
<p>
	{{ $reply->from_uid }}
</p> <label>To_uid</label>
<p>
	{{ $reply->to_uid }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
