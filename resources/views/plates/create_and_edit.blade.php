@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Plate /
          @if($plate->id)
            Edit #{{ $plate->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($plate->id)
          <form action="{{ route('plates.update', $plate->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('plates.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                    <label for="topic_id-field">Topic_id</label>
                    <input class="form-control" type="text" name="topic_id" id="topic_id-field" value="{{ old('topic_id', $plate->topic_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="plate_name-field">Plate_name</label>
                	<input class="form-control" type="text" name="plate_name" id="plate_name-field" value="{{ old('plate_name', $plate->plate_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="plate_type-field">Plate_type</label>
                	<input class="form-control" type="text" name="plate_type" id="plate_type-field" value="{{ old('plate_type', $plate->plate_type ) }}" />
                </div> 
                <div class="form-group">
                    <label for="order-field">Order</label>
                    <input class="form-control" type="text" name="order" id="order-field" value="{{ old('order', $plate->order ) }}" />
                </div> 
                <div class="form-group">
                    <label for="master_id-field">Master_id</label>
                    <input class="form-control" type="text" name="master_id" id="master_id-field" value="{{ old('master_id', $plate->master_id ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('plates.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
