@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Follow
          <a class="btn btn-success float-xs-right" href="{{ route('follows.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($follows->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>User_id</th> <th>Follow_user_id</th> <th>Status</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($follows as $follow)
              <tr>
                <td class="text-xs-center"><strong>{{$follow->id}}</strong></td>

                <td>{{$follow->user_id}}</td> <td>{{$follow->follow_user_id}}</td> <td>{{$follow->status}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('follows.show', $follow->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('follows.edit', $follow->id) }}">
                    E
                  </a>

                  <form action="{{ route('follows.destroy', $follow->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $follows->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
