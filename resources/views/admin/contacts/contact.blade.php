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
    <h3>Contact Us</h3>
  </div>
  <div class="current-date">
    <i class="fa-sharp fa-solid fa-calendar-days"></i>
    <span>&nbsp;Last Update, </span>
    <span>25</span>
    <span>Feb</span>
    <span>2023, </span>
    <span>21:15</span>
  </div>

  <div class="table-tag contact">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Email</th>
          <th scope="col">Message</th>

          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php $id = 0; ?>

        @foreach($contacts as $contact)
        <tr>
          <th scope="row">{{ $id += 1 }}</th>
          <td>{{$contact->email}}</td>
          <td>{{$contact->message}}</td>

          <td><a href="{{ route('contacts.show', $contact->id) }}" class="del">Delete</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

</div>

@endsection