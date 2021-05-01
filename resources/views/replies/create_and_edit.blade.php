@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Reply /
          @if($reply->id)
            Edit #{{ $reply->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($reply->id)
          <form action="{{ route('replies.update', $reply->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('replies.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                    <label for="comment_id-field">Comment_id</label>
                    <input class="form-control" type="text" name="comment_id" id="comment_id-field" value="{{ old('comment_id', $reply->comment_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="reply_type-field">Reply_type</label>
                	<input class="form-control" type="text" name="reply_type" id="reply_type-field" value="{{ old('reply_type', $reply->reply_type ) }}" />
                </div> 
                <div class="form-group">
                	<label for="content-field">Content</label>
                	<textarea name="content" id="content-field" class="form-control" rows="3">{{ old('content', $reply->content ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="from_uid-field">From_uid</label>
                    <input class="form-control" type="text" name="from_uid" id="from_uid-field" value="{{ old('from_uid', $reply->from_uid ) }}" />
                </div> 
                <div class="form-group">
                    <label for="to_uid-field">To_uid</label>
                    <input class="form-control" type="text" name="to_uid" id="to_uid-field" value="{{ old('to_uid', $reply->to_uid ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('replies.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
