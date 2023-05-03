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
<div class="dashboard add-plant">
    <div class="dash-heading">
        <h3>Add Plant</h3>
    </div>
    <div class="current-date">
        <i class="fa-sharp fa-solid fa-calendar-days"></i>
        <span>&nbsp;Last Update, </span>
        <span>25</span>
        <span>Feb</span>
        <span>2023, </span>
        <span>21:15</span>
    </div>
    <form action="{{ route('plants.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Plant Name" class="input-field" name="name" />
        <select class="form-select form-select-sm select-field" aria-label=".form-select-sm example" name="category_id">
            <option selected disabled>Choose Category</option>


            @foreach($categories as $category):
            <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
        </select>
        <input type="number" placeholder="Price" class="input-field" name="price" />
        <input type="number" placeholder="Plants In stock" class="input-field" name="stock" />
        <div class="top">
            <div class="standard add-image">
                <p>Choose Plant Image</p>
                <div class="in">
                    <input type="file" accept=".png,.jpg,.jpeg,.gif" name="uploadfile" id="img" style="display:none;" onchange="javascript:showoneimg()" />
                    <label for="img">Browse</label>
                </div>


            </div>

        </div>
        <div>
            <ul id="images">

            </ul>
        </div>


        <button class="add">Add</button>
    </form>

</div>

@endsection