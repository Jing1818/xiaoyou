@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Topiccate
          <a class="btn btn-success float-xs-right" href="{{ route('topiccates.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($topiccates->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Parent_id</th> <th>Name</th> <th>Order</th><th>帖子</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($topiccates as $topiccate)
              <tr>
                <td class="text-xs-center"><strong>{{$topiccate->id}}</strong></td>

                <td>{{$topiccate->parent_id}}</td> <td>{{$topiccate->name}}</td> <td>{{$topiccate->order}}</td><td>

                </td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('topiccates.show', $topiccate->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('topiccates.edit', $topiccate->id) }}">
                    E
                  </a>

                  <form action="{{ route('topiccates.destroy', $topiccate->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $topiccates->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
