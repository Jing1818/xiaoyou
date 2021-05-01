@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Activity
          <a class="btn btn-success float-xs-right" href="{{ route('activities.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($activities->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Activity_name</th> <th>Activity_desc</th> <th>Status</th> <th>Start_time</th> <th>End_time</th> <th>User_id</th> <th>Index</th> <th>Is_admin</th> <th>Join_num</th> <th>Is_show_winner</th> <th>Activity_type</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($activities as $activity)
              <tr>
                <td class="text-xs-center"><strong>{{$activity->id}}</strong></td>

                <td>{{$activity->activity_name}}</td> <td>{{$activity->activity_desc}}</td> <td>{{$activity->status}}</td> <td>{{$activity->start_time}}</td> <td>{{$activity->end_time}}</td> <td>{{$activity->user_id}}</td> <td>{{$activity->index}}</td> <td>{{$activity->is_admin}}</td> <td>{{$activity->join_num}}</td> <td>{{$activity->is_show_winner}}</td> <td>{{$activity->activity_type}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('activities.show', $activity->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('activities.edit', $activity->id) }}">
                    E
                  </a>

                  <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $activities->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
