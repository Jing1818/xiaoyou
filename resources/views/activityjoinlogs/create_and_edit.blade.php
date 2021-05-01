@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Activityjoinlog /
          @if($activityjoinlog->id)
            Edit #{{ $activityjoinlog->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($activityjoinlog->id)
          <form action="{{ route('activityjoinlogs.update', $activityjoinlog->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('activityjoinlogs.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                    <label for="activity_id-field">Activity_id</label>
                    <input class="form-control" type="text" name="activity_id" id="activity_id-field" value="{{ old('activity_id', $activityjoinlog->activity_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $activityjoinlog->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="comment_count-field">Comment_count</label>
                    <input class="form-control" type="text" name="comment_count" id="comment_count-field" value="{{ old('comment_count', $activityjoinlog->comment_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="like_count-field">Like_count</label>
                    <input class="form-control" type="text" name="like_count" id="like_count-field" value="{{ old('like_count', $activityjoinlog->like_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="rank_level-field">Rank_level</label>
                    <input class="form-control" type="text" name="rank_level" id="rank_level-field" value="{{ old('rank_level', $activityjoinlog->rank_level ) }}" />
                </div> 
                <div class="form-group">
                	<label for="win_reason-field">Win_reason</label>
                	<input class="form-control" type="text" name="win_reason" id="win_reason-field" value="{{ old('win_reason', $activityjoinlog->win_reason ) }}" />
                </div> 
                <div class="form-group">
                    <label for="join_count-field">Join_count</label>
                    <input class="form-control" type="text" name="join_count" id="join_count-field" value="{{ old('join_count', $activityjoinlog->join_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="reward_type-field">Reward_type</label>
                    <input class="form-control" type="text" name="reward_type" id="reward_type-field" value="{{ old('reward_type', $activityjoinlog->reward_type ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('activityjoinlogs.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
