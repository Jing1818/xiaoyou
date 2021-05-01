@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Topic / Show #{{ $topic->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('topics.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('topics.edit', $topic->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Cate_id</label>
<p>
	{{ $topic->cate_id }}
</p> <label>Topic_name</label>
<p>
	{{ $topic->topic_name }}
</p> <label>Topic_desc</label>
<p>
	{{ $topic->topic_desc }}
</p> <label>Post_count</label>
<p>
	{{ $topic->post_count }}
</p> <label>Member_count</label>
<p>
	{{ $topic->member_count }}
</p> <label>Master_id</label>
<p>
	{{ $topic->master_id }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
