@extends('layouts.admin_layout')
@section('content')
<main>


    <div class="container-fluid px-4">
        <h1 class="mt-4">About Us</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">About Us</li>
        </ol> 
        <div class="card mb-4">
        </div>

      <div>

        <form action="{{route('admin.description.update')}}" method="POST" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT')}}
          
            <div class="form-group mb-5">
                <label for="formGroupExampleInput"><h5>Services Description</h5></label>
                <textarea type="description" class="form-control" id="formGroupExampleInput" name="service_description" value="">{{$data->service_description}}</textarea>
            </div>

            <div class="form-group mb-5">
                <label for="formGroupExampleInput"><h5>Image Gallery Description</h5></label>
                <textarea type="description" class="form-control" id="formGroupExampleInput" name="img_description" value="">{{$data->img_description}}</textarea>
            </div>

            <div class="form-group mb-5">
                <label for="formGroupExampleInput"><h5>Testimonials Description</h5></label>
                <textarea type="description" class="form-control" id="formGroupExampleInput" name="testimonial_description" value="">{{$data->testimonial_description}}</textarea>
            </div>

            <div class="form-group mb-5">
                <label for="formGroupExampleInput"><h5>Call To Action Description</h5></label>
                <textarea type="description" class="form-control" id="formGroupExampleInput" name="call_description" value="">{{$data->call_description}}</textarea>
            </div>
            <div class="form-group mb-5">
                <label for="formGroupExampleInput"><h5>Our Team Description</h5></label>
                <textarea type="description" class="form-control" id="formGroupExampleInput" name="team_description" value="">{{$data->team_description}}</textarea>
            </div>
            <div class="form-group mb-5">
                <label for="formGroupExampleInput"><h5>Contact Us Description</h5></label>
                <textarea type="description" class="form-control" id="formGroupExampleInput" name="contact_description" value="">{{$data->contact_description}}</textarea>
            </div>
            <div class="form-group mb-5">
                <label for="formGroupExampleInput"><h5>Map Url</h5></label>
                <textarea type="description" class="form-control" id="formGroupExampleInput" name="map" value="">{{$data->map}}</textarea>
            </div>


              <button type="submit" class="btn btn-outline-success mt-3 mb-5">submit 
              </button>

        </form> 


    </div>


</main> 
@endsection
