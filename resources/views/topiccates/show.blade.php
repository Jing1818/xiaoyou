@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Topiccate / Show #{{ $topiccate->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('topiccates.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('topiccates.edit', $topiccate->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Parent_id</label>
<p>
	{{ $topiccate->parent_id }}
</p> <label>Name</label>
<p>
	{{ $topiccate->name }}
</p> <label>Order</label>
<p>
	{{ $topiccate->order }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
