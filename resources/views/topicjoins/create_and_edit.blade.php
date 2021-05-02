@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Topicjoin /
          @if($topicjoin->id)
            Edit #{{ $topicjoin->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($topicjoin->id)
          <form action="{{ route('topicjoins.update', $topicjoin->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('topicjoins.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $topicjoin->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="topic_id-field">Topic_id</label>
                    <input class="form-control" type="text" name="topic_id" id="topic_id-field" value="{{ old('topic_id', $topicjoin->topic_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="status-field">Status</label>
                    <input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $topicjoin->status ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('topicjoins.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
