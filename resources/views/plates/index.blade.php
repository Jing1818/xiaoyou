@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Plate
          <a class="btn btn-success float-xs-right" href="{{ route('plates.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($plates->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Topic_id</th> <th>Plate_name</th> <th>Plate_type</th> <th>Order</th> <th>Master_id</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($plates as $plate)
              <tr>
                <td class="text-xs-center"><strong>{{$plate->id}}</strong></td>

                <td>{{$plate->topic_id}}</td> <td>{{$plate->plate_name}}</td> <td>{{$plate->plate_type}}</td> <td>{{$plate->order}}</td> <td>{{$plate->master_id}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('plates.show', $plate->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('plates.edit', $plate->id) }}">
                    E
                  </a>

                  <form action="{{ route('plates.destroy', $plate->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $plates->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
