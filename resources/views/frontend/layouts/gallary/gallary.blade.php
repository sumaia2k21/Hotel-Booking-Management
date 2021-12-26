@extends('frontend.index')
@section('content')


<section class="w3l-servicesblock1" id="service">
    <div class="features-with-17_sur py-5">
    <h2 style="text-align: center;">Gallary</h2>
        <div class="container py-lg-5 py-sm-4">
            <div class="features-with-17-top_sur">
                <div class="row">
                @foreach($gallary as $data)
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left2">
                            
                            {{$data->name}}
                                <img class="img-fluid" src="{{url('uploads/'.$data->image)}}" alt="">
                             </div>
                        </div>
                    </div>
                 
                    @endforeach

                </div>


            </div>


        </div>

    </div>
</section>

@endsection