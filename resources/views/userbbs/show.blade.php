@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Userbb / Show #{{ $userbb->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('userbbs.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('userbbs.edit', $userbb->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>User_id</label>
<p>
	{{ $userbb->user_id }}
</p> <label>Post_count</label>
<p>
	{{ $userbb->post_count }}
</p> <label>Comment_count</label>
<p>
	{{ $userbb->comment_count }}
</p> <label>Like_total</label>
<p>
	{{ $userbb->like_total }}
</p> <label>Follow_count</label>
<p>
	{{ $userbb->follow_count }}
</p> <label>Fans_count</label>
<p>
	{{ $userbb->fans_count }}
</p> <label>Bbs_roles</label>
<p>
	{{ $userbb->bbs_roles }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
