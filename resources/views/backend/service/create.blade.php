@extends('layouts.admin_layout')
@section('content')


<main>


    <div class="container-fluid px-4">
            <h1 class="mt-4">Create Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Service</li>
                <li class="breadcrumb-item active">Create</li>
            </ol> 
            <div class="card mb-4"></div>


            <div>
                
                <form action="{{route('admin.service.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}

                <div class="row">
                    <div class="from-group col-md-6 mt-2 mb-5">
                        <h4>Image</h4>
                        <img  height="180px" width="280px" src="{{asset('assets/img/small_img.png')}}" class="img thumbnail">
                        <input class="mt-2" type="file" name="img1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="from-group col-md-6 mt-2 mb-5">
                        <h4>Image</h4>
                        <img  height="180px" width="280px" src="{{asset('assets/img/small_img.png')}}" class="img thumbnail">
                        <input class="mt-2" type="file" name="img2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="from-group col-md-6 mt-2 mb-5">
                        <h4>Image</h4>
                        <img  height="180px" width="280px" src="{{asset('assets/img/small_img.png')}}" class="img thumbnail">
                        <input class="mt-2" type="file" name="img3">
                    </div>
                  </div>
                  <div class="form-group mb-5">
                    <label for="formGroupExampleInput"><h5>Category of The Product</h5></label>
                    <input type="category" class="form-control" id="formGroupExampleInput" name="category" value="">
                </div>
                <div class="form-group mb-5">
                    <label for="formGroupExampleInput"><h5>Name of The Product</h5></label>
                    <input type="name" class="form-control" id="formGroupExampleInput" name="name" value="">
                </div>
                <div class="form-group mb-5">
                    <label for="formGroupExampleInput"><h5>Imported From</h5></label>
                    <input type="import" class="form-control" id="formGroupExampleInput" name="import" value="">
                </div>
                    <div class="form-group mb-5">
                        <label for="formGroupExampleInput"><h5>Bootstrap Icons</h5></label>
                        <input type="icon" class="form-control" id="formGroupExampleInput" name="icon" value="">
                    </div>
                    <div class="form-group mb-5">
                        <label for="formGroupExampleInput"><h5>Title</h5></label>
                        <input type="title" class="form-control" id="formGroupExampleInput" name="title" value="">
                    </div>

                    <div class="form-group mb-5">
                        <label for="formGroupExampleInput"><h5>Description</h5></label>
                        <textarea type="description" class="form-control" id="formGroupExampleInput" name="description" value=""></textarea>
                    </div>


              





                    <button type="submit"  name="submit" class="btn btn-outline-success mt-3 mb-5">submit</button>

                </form> 

            </div>

     


    </div>


</main> 
@endsection







