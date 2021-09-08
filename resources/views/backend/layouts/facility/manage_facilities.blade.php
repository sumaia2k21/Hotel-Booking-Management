@extends('backend.master')
@section('content')
<!-- <h4 style="background: #f5c842;">Manage Facility</h4> -->
<div>
    <h2"><strong>Facilities/</strong>manage facilities</h2>
</div>
<br>
<br>
@if(session()->has('message'))
    <span class="alert alert-success">
        {{ session()->get('message') }}
	</span>
@endif  

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
                <td>{{$fy->id}}</td>
                 
                <td>
                <img src="{{url('/uploads/'.$fy->imaje)}}"width="40px" alt="imaje">
                </td>
               
                <td>{{$fy->facility_title}}</td>
                <td>{{$fy->description}}</td>
                 <td>
                    
                    <a href="{{route('facility.edit',$fy->id)}}" class="btn btn-success">edit</a>
                    <a href="{{route('facility.delete',$fy->id)}}" class="btn btn-danger">delect</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$facilitylist->links('pagination::bootstrap-4')}} 
</div>

@endsection
