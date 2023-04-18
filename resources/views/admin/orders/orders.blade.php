@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
                <div class="dashboard">
                    <div class="dash-heading">
                        <h3>Orders</h3>
                    </div>
                    <div class="current-date">
                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        <span >&nbsp;Last Update, </span>
                        <span >25</span>
                        <span >Feb</span>
                        <span >2023, </span>
                        <span >21:15</span>
                    </div>
                    <button class="add-btn" onclick="location.href='add-order.html'">+ Add New Order</button>
                    <div class="table-tag">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Plant Name</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Username</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>********</td>
                                <td>*************</td>
                                <td>240</td>
                                <td>*******</td>
                                <td><a href="edit-order.html" class="edit">Edit</a></td>
                                <td><a href="delete-order.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>********</td>
                                <td>*************</td>
                                <td>240</td>
                                <td>*******</td>
                                <td><a href="edit-order.html" class="edit">Edit</a></td>
                                <td><a href="delete-order.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>********</td>
                                <td>*************</td>
                                <td>240</td>
                                <td>*******</td>
                                <td><a href="edit-order.html" class="edit">Edit</a></td>
                                <td><a href="delete-order.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>********</td>
                                <td>*************</td>
                                <td>240</td>
                                <td>*******</td>
                                <td><a href="edit-order.html" class="edit">Edit</a></td>
                                <td><a href="delete-order.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>********</td>
                                <td>*************</td>
                                <td>240</td>
                                <td>*******</td>
                                <td><a href="edit-order.html" class="edit">Edit</a></td>
                                <td><a href="delete-order.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>********</td>
                                <td>*************</td>
                                <td>240</td>
                                <td>*******</td>
                                <td><a href="edit-order.html" class="edit">Edit</a></td>
                                <td><a href="delete-order.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>********</td>
                                <td>*************</td>
                                <td>240</td>
                                <td>*******</td>
                                <td><a href="edit-order.html" class="edit">Edit</a></td>
                                <td><a href="delete-order.html" class="del">Delete</a></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    
            </div>
         
    @endsection
