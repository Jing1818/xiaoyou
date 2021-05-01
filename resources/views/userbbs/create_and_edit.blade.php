@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Userbb /
          @if($userbb->id)
            Edit #{{ $userbb->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($userbb->id)
          <form action="{{ route('userbbs.update', $userbb->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('userbbs.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $userbb->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="post_count-field">Post_count</label>
                    <input class="form-control" type="text" name="post_count" id="post_count-field" value="{{ old('post_count', $userbb->post_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="comment_count-field">Comment_count</label>
                    <input class="form-control" type="text" name="comment_count" id="comment_count-field" value="{{ old('comment_count', $userbb->comment_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="like_total-field">Like_total</label>
                    <input class="form-control" type="text" name="like_total" id="like_total-field" value="{{ old('like_total', $userbb->like_total ) }}" />
                </div> 
                <div class="form-group">
                    <label for="follow_count-field">Follow_count</label>
                    <input class="form-control" type="text" name="follow_count" id="follow_count-field" value="{{ old('follow_count', $userbb->follow_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="fans_count-field">Fans_count</label>
                    <input class="form-control" type="text" name="fans_count" id="fans_count-field" value="{{ old('fans_count', $userbb->fans_count ) }}" />
                </div> 
                <div class="form-group">
                	<label for="bbs_roles-field">Bbs_roles</label>
                	<input class="form-control" type="text" name="bbs_roles" id="bbs_roles-field" value="{{ old('bbs_roles', $userbb->bbs_roles ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('userbbs.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
