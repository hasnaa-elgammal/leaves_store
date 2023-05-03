
@extends('layout')

@section('title')
Edit Category
@endsection


@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible" style="margin:10px">
  {{ session()->get('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>
@endif
<div class="dashboard">
  <div class="dash-heading">
    <h3>Plant List</h3>
  </div>
  <div class="current-date">
    <i class="fa-sharp fa-solid fa-calendar-days"></i>
    <span>&nbsp;Last Update, </span>
    <span>25</span>
    <span>Feb</span>
    <span>2023, </span>
    <span>21:15</span>
  </div>
  <button class="add-btn" onclick="location.href='{{ route('plants.create') }}'">+ Add New Plant</button>

  <div class="table-tag">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Plant Image</th>
          <th scope="col">Plant Name</th>
          <th scope="col">Price</th>
          <th scope="col">In stock</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>


        <?php $id = 0; ?>

        @foreach($plants as $plant)
        <tr>
          <th scope="row">{{ $id += 1 }}</th>
          <td><img src="images/plants/{{ $plant->image}}" width="75" /></td>
          <td>{{$plant->name}}</td>
          <td>{{$plant->price}}</td>
          <td>{{$plant->stock}}</td>
          <td><a href="{{ route('plants.edit', $plant->id) }}" class="edit">Edit</a></td>
          <td><a href="{{ route('plants.show', $plant->id) }}" class="del">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

@endsection