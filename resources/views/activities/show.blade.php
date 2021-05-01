@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Activity / Show #{{ $activity->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('activities.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('activities.edit', $activity->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Activity_name</label>
<p>
	{{ $activity->activity_name }}
</p> <label>Activity_desc</label>
<p>
	{{ $activity->activity_desc }}
</p> <label>Status</label>
<p>
	{{ $activity->status }}
</p> <label>Start_time</label>
<p>
	{{ $activity->start_time }}
</p> <label>End_time</label>
<p>
	{{ $activity->end_time }}
</p> <label>User_id</label>
<p>
	{{ $activity->user_id }}
</p> <label>Index</label>
<p>
	{{ $activity->index }}
</p> <label>Is_admin</label>
<p>
	{{ $activity->is_admin }}
</p> <label>Join_num</label>
<p>
	{{ $activity->join_num }}
</p> <label>Is_show_winner</label>
<p>
	{{ $activity->is_show_winner }}
</p> <label>Activity_type</label>
<p>
	{{ $activity->activity_type }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
