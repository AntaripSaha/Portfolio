@extends('layouts.admin_layout')
@section('content')
<main>


    <div class="container-fluid px-4">
        <h1 class="mt-4">Home</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> 
        <div class="card mb-4"></div>




      <div>


        <form action="{{route('admin.home.update')}}" method="POST" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT')}}
          

            <div class="row">
              <div class="from-group col-md-3 mt-2 mb-2">
                  <h4>Background Image</h4>
                  <img  height="180px" width="280px"  src="{{url($main->img1)}}" class="img thumbnail">
                  <input class="mt-2" type="file" id="img1" name="img1">
              </div>
            </div>

            {{-- <div class="row">
              <div class="from-group col-md-3 mt-2 mb-2">
                  <h4>Background Image</h4>
                  <img style="height: 20vh" src="{{url($main->img2)}}" class="img thumbnail">
                  <input class="mt-2" type="file" id="img2" name="img2">
              </div> --}}


            <div class="row">
                <div class="from-group col-md-3 mt-2 mb-2">
                    <h4>Background Image</h4>
                    <img  src="{{url($main->img2)}}" class="img thumbnail" height="180px" width="280px" >
                    <input class="mt-2" type="file" id="img2" name="img2">
                </div>
              </div>
              <div class="row">
                <div class="from-group col-md-3 mt-2 mb-2">
                    <h4>Background Image</h4>
                    <img  height="180px" width="280px"  src="{{url($main->img3)}}" class="img thumbnail">
                    <input class="mt-2" type="file" id="img3" name="img3">
                </div>
              </div>
              <div class="row">
                <div class="from-group col-md-3 mt-2 mb-2">
                    <h4>Background Image</h4>
                    <img  height="180px" width="280px"  src="{{url($main->img4)}}" class="img thumbnail">
                    <input class="mt-2" type="file" id="img4" name="img4">
                </div>
              </div>
              <div class="row">
                <div class="from-group col-md-3 mt-2 mb-2">
                    <h4>Background Image</h4>
                    <img  height="180px" width="280px"  src="{{url($main->img5)}}" class="img thumbnail">
                    <input class="mt-2" type="file" id="img5" name="img5">
                </div>
              </div>

            <h3>Title or Welcome Messages</h3>

            <div class="form-group mb-2">
                <label for="formGroupExampleInput"><h6>First Word/Line</h6></label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="one"  value="{{$main->one}}">
            </div>
            <div class="form-group mb-2">
                <label for="formGroupExampleInput2"><h6>Middle Word/ Line</h6></label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="two" value="{{$main->two}}">
            </div>

            <div class="form-group mb-2">
                <label for="formGroupExampleInput2"><h6>Last Word/Line</h6></label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="three" value="{{$main->three}}">
            </div>
    

              <button type="submit"  name="submit" class="btn btn-outline-success mt-3 mb-5">submit 
              </button>

        </form> 


    </div>


</main> 
@endsection
