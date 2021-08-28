@extends('backend.master')
@section('content')
<h4 style="background: #f5c842;">Manage Facility</h4>
<div class="card">
<table class="table table-striped table-hover">
    <thead class="thead-dark">

            <th scope="col">sl</th>
            <th scope="col">Imaje</th>
            <th scope="col">Facilities Title</th>
            <th scope="col">Description</th>
            
            <th scope="col">Action</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($facilitylist as $fy)
            <tr>
                <td>{{$loop->iteration}}</td>
                 
                 
                <td>{{$fy->facility_title}}</td>
                <td>{{$fy->description}}</td>
                <td>{{$fy->imaje}}</td>
               
                
                
                <td>
                    <a type="button" class="btn btn-warning">view</a>
                    <a type="button" class="btn btn-success">edit</a>
                    <a type="button" class="btn btn-danger">delect</a>

                </td>

                <!-- <a type="button" class="btn btn-primary">Primary</a> -->

            </tr>
            @endforeach();
        </tbody>
    </table>
    {{$facilitylist->links('pagination::bootstrap-4')}} 
</div>

@endsection
