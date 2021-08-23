@extends('master')
@section('content')
<div>
    <h1><strong>Hotel Booking Management System/</strong>booking</h2>
</div>
<br>
<h4 style="background: #f5c842;">All Booking<h4>
        <div class="card">
            <table class="table table-bordered">
                <thead>

                    <th scope="col">S.No</th>

                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Number</th>

                   
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                   
                        <td>@fat</td>
                        <td>
                            <a type="button" class="btn btn-warning">view</a>
                            <a type="button" class="btn btn-success">edit</a>
                            <a type="button" class="btn btn-danger">delect</a>

                        </td>

                        <!-- <a type="button" class="btn btn-primary">Primary</a> -->

                    </tr>
                </tbody>
            </table>
        </div>

        @endsection
