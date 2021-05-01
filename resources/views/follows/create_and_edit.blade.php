@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Follow /
          @if($follow->id)
            Edit #{{ $follow->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($follow->id)
          <form action="{{ route('follows.update', $follow->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('follows.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $follow->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="follow_user_id-field">Follow_user_id</label>
                    <input class="form-control" type="text" name="follow_user_id" id="follow_user_id-field" value="{{ old('follow_user_id', $follow->follow_user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="status-field">Status</label>
                    <input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $follow->status ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('follows.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
