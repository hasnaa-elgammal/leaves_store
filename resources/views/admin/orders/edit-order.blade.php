@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
                <div class="dashboard add-plant">
                    <div class="dash-heading">
                        <h3>Edit Order</h3>
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
                        <input type="text" placeholder="Plant Name" class="input-field" />
                        <select class="form-select form-select-sm select-field" aria-label=".form-select-sm example">
                            <option selected>Choose Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select> 
                        <input type="number" placeholder="Username" class="input-field" />
                        <input type="text" placeholder="Country" class="input-field" />
                        <input type="text" placeholder="City" class="input-field" />
                        <input type="text" placeholder="Street" class="input-field" />

                        <button class="edit-btn">Edit</button>
                    </form>

                </div>
               
        @endsection
