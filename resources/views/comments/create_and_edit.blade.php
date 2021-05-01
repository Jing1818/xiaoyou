@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Comment /
          @if($comment->id)
            Edit #{{ $comment->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($comment->id)
          <form action="{{ route('comments.update', $comment->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('comments.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                    <label for="post_id-field">Post_id</label>
                    <input class="form-control" type="text" name="post_id" id="post_id-field" value="{{ old('post_id', $comment->post_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="content-field">Content</label>
                	<textarea name="content" id="content-field" class="form-control" rows="3">{{ old('content', $comment->content ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="from_uid-field">From_uid</label>
                    <input class="form-control" type="text" name="from_uid" id="from_uid-field" value="{{ old('from_uid', $comment->from_uid ) }}" />
                </div> 
                <div class="form-group">
                	<label for="comment_type-field">Comment_type</label>
                	<input class="form-control" type="text" name="comment_type" id="comment_type-field" value="{{ old('comment_type', $comment->comment_type ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('comments.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
