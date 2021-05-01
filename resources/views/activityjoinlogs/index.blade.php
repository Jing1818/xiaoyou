@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Activityjoinlog
          <a class="btn btn-success float-xs-right" href="{{ route('activityjoinlogs.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($activityjoinlogs->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Activity_id</th> <th>User_id</th> <th>Comment_count</th> <th>Like_count</th> <th>Rank_level</th> <th>Win_reason</th> <th>Join_count</th> <th>Reward_type</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($activityjoinlogs as $activityjoinlog)
              <tr>
                <td class="text-xs-center"><strong>{{$activityjoinlog->id}}</strong></td>

                <td>{{$activityjoinlog->activity_id}}</td> <td>{{$activityjoinlog->user_id}}</td> <td>{{$activityjoinlog->comment_count}}</td> <td>{{$activityjoinlog->like_count}}</td> <td>{{$activityjoinlog->rank_level}}</td> <td>{{$activityjoinlog->win_reason}}</td> <td>{{$activityjoinlog->join_count}}</td> <td>{{$activityjoinlog->reward_type}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('activityjoinlogs.show', $activityjoinlog->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('activityjoinlogs.edit', $activityjoinlog->id) }}">
                    E
                  </a>

                  <form action="{{ route('activityjoinlogs.destroy', $activityjoinlog->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $activityjoinlogs->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
