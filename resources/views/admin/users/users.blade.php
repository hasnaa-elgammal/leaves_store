@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
                <div class="dashboard">
                    <div class="dash-heading">
                        <h3>Users</h3>
                    </div>
                    <div class="current-date">
                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        <span >&nbsp;Last Update, </span>
                        <span >25</span>
                        <span >Feb</span>
                        <span >2023, </span>
                        <span >21:15</span>
                    </div>
                    <button class="add-btn" onclick="location.href='add-user.html'">+ Add New User</button>
                    <div class="table-tag">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone </th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>*************</td>
                                <td>*****@yahoo.com</td>
                                <td>0123456789</td>
                                <td><a href="edit-user.html" class="edit">Edit</a></td>
                                <td><a href="delete-user.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>*************</td>
                                <td>*****@yahoo.com</td>
                                <td>0123456789</td>
                                <td><a href="edit-user.html" class="edit">Edit</a></td>
                                <td><a href="delete-user.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>*************</td>
                                <td>*****@yahoo.com</td>
                                <td>0123456789</td>
                                <td><a href="edit-user.html" class="edit">Edit</a></td>
                                <td><a href="delete-user.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>*************</td>
                                <td>*****@yahoo.com</td>
                                <td>0123456789</td>
                                <td><a href="edit-user.html" class="edit">Edit</a></td>
                                <td><a href="delete-user.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>*************</td>
                                <td>*****@yahoo.com</td>
                                <td>0123456789</td>
                                <td><a href="edit-user.html" class="edit">Edit</a></td>
                                <td><a href="delete-user.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>*************</td>
                                <td>*****@yahoo.com</td>
                                <td>0123456789</td>
                                <td><a href="edit-user.html" class="edit">Edit</a></td>
                                <td><a href="delete-user.html" class="del">Delete</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>*************</td>
                                <td>*****@yahoo.com</td>
                                <td>0123456789</td>
                                <td><a href="edit-user.html" class="edit">Edit</a></td>
                                <td><a href="delete-user.html" class="del">Delete</a></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    
            </div>
           
    @endsection
