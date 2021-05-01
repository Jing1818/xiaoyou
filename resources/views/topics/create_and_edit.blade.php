@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Topic /
          @if($topic->id)
            Edit #{{ $topic->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($topic->id)
          <form action="{{ route('topics.update', $topic->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('topics.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                    <label for="cate_id-field">Cate_id</label>
                    <input class="form-control" type="text" name="cate_id" id="cate_id-field" value="{{ old('cate_id', $topic->cate_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="topic_name-field">Topic_name</label>
                	<input class="form-control" type="text" name="topic_name" id="topic_name-field" value="{{ old('topic_name', $topic->topic_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="topic_desc-field">Topic_desc</label>
                	<textarea name="topic_desc" id="topic_desc-field" class="form-control" rows="3">{{ old('topic_desc', $topic->topic_desc ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="post_count-field">Post_count</label>
                    <input class="form-control" type="text" name="post_count" id="post_count-field" value="{{ old('post_count', $topic->post_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="member_count-field">Member_count</label>
                    <input class="form-control" type="text" name="member_count" id="member_count-field" value="{{ old('member_count', $topic->member_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="master_id-field">Master_id</label>
                    <input class="form-control" type="text" name="master_id" id="master_id-field" value="{{ old('master_id', $topic->master_id ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('topics.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
