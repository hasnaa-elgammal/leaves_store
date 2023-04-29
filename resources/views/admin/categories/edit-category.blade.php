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
                        <h3>Edit Category</h3>
                    </div>
                    <div class="current-date">
                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        <span>&nbsp;Last Update, </span>
                        <span>25</span>
                        <span>Feb</span>
                        <span>2023, </span>
                        <span>21:15</span>
                    </div>
                    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <input type="text" placeholder="Category Name" class="input-field" value="{{$category->name}}" name="name" />
                        <input type="number" placeholder="Number of plants" class="input-field" value="{{$category->num_of_plants}}" name="num_of_plants" />
                        <div class="top">
                            <div class="standard add-image">
                                <p>Choose Category Image</p>
                                <div class="in">
                                    <input type="file" accept=".png,.jpg,.jpeg,.gif" name="uploadfile" id="img"
                                        style="display:none;" onchange="javascript:showoneimg()" />
                                    <label for="img">Browse</label>
                                </div>


                            </div>
                            
                        </div>
                        <div>
                            <ul id="images">

                            </ul>
                        </div>

                        <button type="submit"  class="edit-btn">Edit</button>
                    </form>

                </div>
               
        @endsection
       