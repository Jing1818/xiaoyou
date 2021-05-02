@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Topicjoin / Show #{{ $topicjoin->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('topicjoins.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('topicjoins.edit', $topicjoin->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>User_id</label>
<p>
	{{ $topicjoin->user_id }}
</p> <label>Topic_id</label>
<p>
	{{ $topicjoin->topic_id }}
</p> <label>Status</label>
<p>
	{{ $topicjoin->status }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
