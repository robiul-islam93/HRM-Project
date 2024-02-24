@extends('backend.layouts.master');

@section('contents')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE CARD PORTLET-->
        <div class="card">


                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>
                        <i class="fa fa-users"></i> Employees List
                    </h5>
                    <a href="{{route('admin.employees.create')}}" class="btn green btn-primary">
                        Add New Employee <i class="fa fa-plus"></i>
                    </a>
                </div>


            <div class="card-body">
                <!-- Employee Table -->
                <div class="col-md-12">
                    <table class="table table-striped table-bordered table-hover">
                        <!-- Table Header -->
                        <thead>
                            <tr>
                                <th>EmployeeID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Dept/Designation</th>
                                <th>At Work</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody>
                            <tr>
                                <td class="center sorting_1"></td>
                                <td class="center">
                                    <img src="https://www.gravatar.com/avatar/cd0776e91340b3a1854cfd0b5fbff7d4?d=mm&amp;s=250" height="80px" />
                                </td>
                                <td class="center">Waino Runte</td>
                                <td class="center">
                                    <p><strong>Department:</strong> Android Developer</p>
                                    <p><strong>Designation:</strong> Fresher Android Developer</p>
                                </td>
                                <td class="center">9 months 23 days</td>
                                <td class="center">
                                    <span class="label label-success">active</span>
                                </td>
                                <td class="center">
                                    <p>
                                        <a class="btn btn-sm purple" href="#">
                                            <i class="fa fa-edit"></i> View/Edit
                                        </a>
                                    </p>
                                    <p>
                                        <a class="btn btn-sm red list-index" href="#" onclick="del('3')">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </p>
                                </td>
                            </tr>
                            <!-- Add more rows for additional employees -->
                        </tbody>
                    </table>
                </div>
                <!-- End Employee Table -->
            </div>

         
        </div>
        <!-- END EXAMPLE CARD PORTLET-->
    </div>
</div>

@endsection