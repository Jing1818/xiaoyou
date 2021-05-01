@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Topic
          <a class="btn btn-success float-xs-right" href="{{ route('topics.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($topics->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Cate_id</th> <th>Topic_name</th> <th>Topic_desc</th> <th>Post_count</th> <th>Member_count</th> <th>Master_id</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($topics as $topic)
              <tr>
                <td class="text-xs-center"><strong>{{$topic->id}}</strong></td>

                <td>{{$topic->topiccate->name}}</td> <td>{{$topic->topic_name}}</td> <td>{{$topic->topic_desc}}</td> <td>{{$topic->post_count}}</td> <td>{{$topic->member_count}}</td> <td>{{$topic->master->real_name}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('topics.show', $topic->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('topics.edit', $topic->id) }}">
                    E
                  </a>

                  <form action="{{ route('topics.destroy', $topic->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $topics->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
