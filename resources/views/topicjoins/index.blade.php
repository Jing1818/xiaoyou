@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Topicjoin
          <a class="btn btn-success float-xs-right" href="{{ route('topicjoins.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($topicjoins->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>User_id</th> <th>Topic_id</th> <th>Status</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($topicjoins as $topicjoin)
              <tr>
                <td class="text-xs-center"><strong>{{$topicjoin->id}}</strong></td>

                <td>{{$topicjoin->user_id}}</td> <td>{{$topicjoin->topic_id}}</td> <td>{{$topicjoin->status}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('topicjoins.show', $topicjoin->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('topicjoins.edit', $topicjoin->id) }}">
                    E
                  </a>

                  <form action="{{ route('topicjoins.destroy', $topicjoin->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $topicjoins->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
