@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
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
                    <form>
                        <input type="text" placeholder="Username" class="input-field" />
                        <input type="email" placeholder="Email" class="input-field" />
                        <input type="number" placeholder="Phone" class="input-field" />
                        <input type="password" placeholder="Password" class="input-field" />
                        <input type="password" placeholder="Rewrite Password" class="input-field" />

                        <button class="edit-btn">Edit</button>
                    </form>

                </div>

        @endsection
