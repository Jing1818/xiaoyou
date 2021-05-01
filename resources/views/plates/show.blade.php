@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Plate / Show #{{ $plate->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('plates.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('plates.edit', $plate->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Topic_id</label>
<p>
	{{ $plate->topic_id }}
</p> <label>Plate_name</label>
<p>
	{{ $plate->plate_name }}
</p> <label>Plate_type</label>
<p>
	{{ $plate->plate_type }}
</p> <label>Order</label>
<p>
	{{ $plate->order }}
</p> <label>Master_id</label>
<p>
	{{ $plate->master_id }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
