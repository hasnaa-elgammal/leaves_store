@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
                <div class="dashboard">
                    <div class="dash-heading">
                        <h3>Edit User</h3>
                    </div>
                    <div class="current-date">
                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        <span>&nbsp;Last Update, </span>
                        <span>25</span>
                        <span>Feb</span>
                        <span>2023, </span>
                        <span>21:15</span>
                    </div>
                    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" placeholder="First Name" class="input-field" name="first_name"  value="{{$user->first_name}}"/>
                        <input type="text" placeholder="Last Name" class="input-field" name="last_name"  value="{{$user->last_name}}" />
                        <input type="email" placeholder="Email" class="input-field" name="email"  value="{{$user->email}}"/>
                        <input type="number" placeholder="Phone" class="input-field" name="mobile_number"  value="{{$user->mobile_number}}" />
                        <input type="password" placeholder="Password" class="input-field" name="password" />
                        <!-- <input type="password" placeholder="Rewrite Password" class="input-field" /> -->

                        <button class="edit-btn">Edit</button>
                    </form>

                </div>

        @endsection
