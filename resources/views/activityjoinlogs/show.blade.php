@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Activityjoinlog / Show #{{ $activityjoinlog->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('activityjoinlogs.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('activityjoinlogs.edit', $activityjoinlog->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Activity_id</label>
<p>
	{{ $activityjoinlog->activity_id }}
</p> <label>User_id</label>
<p>
	{{ $activityjoinlog->user_id }}
</p> <label>Comment_count</label>
<p>
	{{ $activityjoinlog->comment_count }}
</p> <label>Like_count</label>
<p>
	{{ $activityjoinlog->like_count }}
</p> <label>Rank_level</label>
<p>
	{{ $activityjoinlog->rank_level }}
</p> <label>Win_reason</label>
<p>
	{{ $activityjoinlog->win_reason }}
</p> <label>Join_count</label>
<p>
	{{ $activityjoinlog->join_count }}
</p> <label>Reward_type</label>
<p>
	{{ $activityjoinlog->reward_type }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
