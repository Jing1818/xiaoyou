@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Follow / Show #{{ $follow->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('follows.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('follows.edit', $follow->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>User_id</label>
<p>
	{{ $follow->user_id }}
</p> <label>Follow_user_id</label>
<p>
	{{ $follow->follow_user_id }}
</p> <label>Status</label>
<p>
	{{ $follow->status }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
