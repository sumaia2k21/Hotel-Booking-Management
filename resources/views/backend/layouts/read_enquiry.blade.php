@extends('backend.master')
@section('content')
<h4 style="background: #f5c842;">Read Enquiry<h4>
        <div class="card">
            <table class="table table-bordered">
                <thead>

                    <th scope="col">sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Message</th>

                    <!-- <th scope="col">Enquiry Date</th> -->
                    <th scope="col">Action</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
            @foreach($enquirylist as $enquiry)
            <tr>
                
                <td>{{$enquiry->sl}}</td>
                <td>{{$enquiry->name}}</td>
                <td>{{$enquiry->email}}</td>
                <td>{{$enquiry->mobile_no}}</td>
                <td>{{$enquiry->message}}</td>
                
                <td>
                    <a type="button" class="btn btn-warning">view</a>
                    
                    <a type="button" class="btn btn-danger">delect</a>

                </td>

                <!-- <a type="button" class="btn btn-primary">Primary</a> -->

            </tr>
            @endforeach();
        </tbody>
            </table>
            {{$enquirylist->links('pagination::bootstrap-4')}} 
        </div>

        @endsection
