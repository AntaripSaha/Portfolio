@extends('layouts.admin_layout')
@section('content')


<main>


    <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Testimonial</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Testimonial</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol> 
            <div class="card mb-4"></div>


            <div>
                
                <form action="{{route('admin.testimonial.update', $testimonial->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT')}}
                    <div class="row">
                        <div class="from-group col-md-6 mt-2 mb-5">
                            <h4>Image</h4>
                            <img  height="180px" width="280px" src="{{url($testimonial->img)}}" class="img thumbnail">
                            <input class="mt-2" type="file" name="img">
                        </div>
                    </div>
    
                    <div class="form-group mb-5">
                        <label for="formGroupExampleInput"><h5>Name</h5></label>
                        <input type="name" class="form-control" id="formGroupExampleInput" name="name" value="{{$testimonial->name}}">
                    </div>
    
                    <div class="form-group mb-5">
                            <label for="formGroupExampleInput"><h5>Designation</h5></label>
                            <input type="designation" class="form-control" id="formGroupExampleInput" name="designation" value="{{$testimonial->designation}}">
                    </div>
    
                    <div class="form-group mb-5">
                            <label for="formGroupExampleInput"><h5>Quote</h5></label>
                            <textarea type="quote" class="form-control" id="formGroupExampleInput" name="quote" value="">{{$testimonial->quote}}</textarea>
                    </div>
    
                        <button type="submit"  name="submit" class="btn btn-outline-success mt-3 mb-5">submit</button>
    
                    </form> 

            </div>

     


    </div>


</main> 
@endsection
