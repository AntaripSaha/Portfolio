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


        <form action="{{route('admin.about.update')}}" method="POST" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT')}}
          

            <div class="row">
              <div class="from-group col-md-3 mt-3 mb-5">
                  <h2>Background Image</h2>
                  <img style="height: 20vh" src="{{url($data->img)}}" class="img thumbnail">
                  <input class="mt-2" type="file" id="img" name="img">
              </div>
            </div>


            <div class="form-group mb-5">
                <label for="formGroupExampleInput"><h5>Description</h5></label>
                <textarea type="description" class="form-control" id="formGroupExampleInput" name="description" value="">{{$data->description}}</textarea>
            </div>


              <button type="submit"  name="submit" class="btn btn-outline-success mt-3 mb-5">submit 
              </button>

        </form> 


    </div>


</main> 
@endsection
