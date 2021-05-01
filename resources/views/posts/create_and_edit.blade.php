@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Post /
          @if($post->id)
            Edit #{{ $post->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($post->id)
          <form action="{{ route('posts.update', $post->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('posts.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="content-field">Content</label>
                	<textarea name="content" id="content-field" class="form-control" rows="3">{{ old('content', $post->content ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $post->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="topic_id-field">Topic_id</label>
                    <input class="form-control" type="text" name="topic_id" id="topic_id-field" value="{{ old('topic_id', $post->topic_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="activity_id-field">Activity_id</label>
                    <input class="form-control" type="text" name="activity_id" id="activity_id-field" value="{{ old('activity_id', $post->activity_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="reply_count-field">Reply_count</label>
                    <input class="form-control" type="text" name="reply_count" id="reply_count-field" value="{{ old('reply_count', $post->reply_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="view_count-field">View_count</label>
                    <input class="form-control" type="text" name="view_count" id="view_count-field" value="{{ old('view_count', $post->view_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="order-field">Order</label>
                    <input class="form-control" type="text" name="order" id="order-field" value="{{ old('order', $post->order ) }}" />
                </div> 
                <div class="form-group">
                    <label for="like_id-field">Like_id</label>
                    <input class="form-control" type="text" name="like_id" id="like_id-field" value="{{ old('like_id', $post->like_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="comment_count-field">Comment_count</label>
                    <input class="form-control" type="text" name="comment_count" id="comment_count-field" value="{{ old('comment_count', $post->comment_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="plate_id-field">Plate_id</label>
                    <input class="form-control" type="text" name="plate_id" id="plate_id-field" value="{{ old('plate_id', $post->plate_id ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('posts.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
