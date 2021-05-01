@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Userbb
          <a class="btn btn-success float-xs-right" href="{{ route('userbbs.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($userbbs->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>User_id</th> <th>Post_count</th> <th>Comment_count</th> <th>Like_total</th> <th>Follow_count</th> <th>Fans_count</th> <th>Bbs_roles</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($userbbs as $userbb)
              <tr>
                <td class="text-xs-center"><strong>{{$userbb->id}}</strong></td>

                <td>{{$userbb->user_id}}</td> <td>{{$userbb->post_count}}</td> <td>{{$userbb->comment_count}}</td> <td>{{$userbb->like_total}}</td> <td>{{$userbb->follow_count}}</td> <td>{{$userbb->fans_count}}</td> <td>{{$userbb->bbs_roles}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('userbbs.show', $userbb->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('userbbs.edit', $userbb->id) }}">
                    E
                  </a>

                  <form action="{{ route('userbbs.destroy', $userbb->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $userbbs->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
