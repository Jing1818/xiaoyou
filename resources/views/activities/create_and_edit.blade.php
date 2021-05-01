@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Activity /
          @if($activity->id)
            Edit #{{ $activity->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($activity->id)
          <form action="{{ route('activities.update', $activity->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('activities.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="activity_name-field">Activity_name</label>
                	<input class="form-control" type="text" name="activity_name" id="activity_name-field" value="{{ old('activity_name', $activity->activity_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="activity_desc-field">Activity_desc</label>
                	<input class="form-control" type="text" name="activity_desc" id="activity_desc-field" value="{{ old('activity_desc', $activity->activity_desc ) }}" />
                </div> 
                <div class="form-group">
                    <label for="status-field">Status</label>
                    <input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $activity->status ) }}" />
                </div> 
                <div class="form-group">
                    <label for="start_time-field">Start_time</label>
                    <input class="form-control" type="text" name="start_time" id="start_time-field" value="{{ old('start_time', $activity->start_time ) }}" />
                </div> 
                <div class="form-group">
                    <label for="end_time-field">End_time</label>
                    <input class="form-control" type="text" name="end_time" id="end_time-field" value="{{ old('end_time', $activity->end_time ) }}" />
                </div> 
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $activity->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="index-field">Index</label>
                    <input class="form-control" type="text" name="index" id="index-field" value="{{ old('index', $activity->index ) }}" />
                </div> 
                <div class="form-group">
                    <label for="is_admin-field">Is_admin</label>
                    <input class="form-control" type="text" name="is_admin" id="is_admin-field" value="{{ old('is_admin', $activity->is_admin ) }}" />
                </div> 
                <div class="form-group">
                    <label for="join_num-field">Join_num</label>
                    <input class="form-control" type="text" name="join_num" id="join_num-field" value="{{ old('join_num', $activity->join_num ) }}" />
                </div> 
                <div class="form-group">
                    <label for="is_show_winner-field">Is_show_winner</label>
                    <input class="form-control" type="text" name="is_show_winner" id="is_show_winner-field" value="{{ old('is_show_winner', $activity->is_show_winner ) }}" />
                </div> 
                <div class="form-group">
                	<label for="activity_type-field">Activity_type</label>
                	<input class="form-control" type="text" name="activity_type" id="activity_type-field" value="{{ old('activity_type', $activity->activity_type ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('activities.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
