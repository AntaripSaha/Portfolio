@extends('layouts.admin_layout')
@section('content')
<main>


    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> 
        <div class="card mb-4">
        </div>




      <div>


        <form action="{{route('admin.update')}}" method="POST" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT')}}
          

            <div class="row">
              <div class="from-group col-md-3 mt-3 mb-5">
                  <h2>Logo Image</h2>
                  <img style="height: 20vh" src="{{url($data->logo_img)}}" class="img thumbnail">
                  <input class="mt-2" type="file" id="logo_img" name="logo_img">
              </div>
            </div>


            <div class="form-group mb-5">
              <label for="formGroupExampleInput"><h5>Website Name</h5></label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="logo_text" value="{{$data->logo_text}}">
            </div>

            <div class="form-group mb-2">
              <label for="formGroupExampleInput"><h6>Address</h6></label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="address"  value="{{$data->address}}">
          </div>

            <div class="form-group mb-2">
                <label for="formGroupExampleInput"><h6>Email</h6></label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="email"  value="{{$data->email}}">
            </div>
            <div class="form-group mb-2">
                <label for="formGroupExampleInput2"><h6>Phone</h6></label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="phone" value="{{$data->phone}}">
            </div>
              <div class="form-group mb-2">
                <label for="formGroupExampleInput2"><h6>Twitter</h6></label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="twitter" value="{{$data->twitter}}">
              </div>
              <div class="form-group mb-2">
                <label for="formGroupExampleInput2"><h6>Facebook</h6></label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="facebook" value="{{$data->facebook}}">
              </div>
              <div class="form-group  mb-2">
                <label for="formGroupExampleInput2"><h6>Instagram</h6></label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="instagram" value="{{$data->instagram}}">
              </div>
              <div class="form-group  mb-2">
                <label for="formGroupExampleInput2"><H6>LinkedIn</H6></label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="linkedin" value="{{$data->linkedin}}">
              </div>

              <button type="submit"  name="submit" class="btn btn-outline-success mt-3 mb-5">submit 
              </button>

        </form> 


    </div>


</main> 
@endsection
