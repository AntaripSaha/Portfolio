@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Portfolio</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol> 
            <div class="card mb-4"></div>
            <div>
                <form action="{{route('admin.portfolio.update', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT')}}
                    <div class="row">
                        <div class="from-group col-md-6 mt-2 mb-5">
                            <h4>Small Image</h4>
                            <img   height="180px" width="280px" src="{{url($portfolio->small_img)}}" class="img thumbnail">
                            <input class="mt-2" type="file" name="small_img">
                        </div>
                    </div>
                    <div class="row">
                        <div class="from-group col-md-6 mt-2 mb-5">
                            <h4>Big Image</h4>
                            <img  height="280px" width="380px" src="{{url($portfolio->big_img)}}" class="img thumbnail">
                            <input class="mt-2" type="file" name="big_img">
                        </div>
                    </div>
                    <div class="form-group mb-5">
                        <label for="formGroupExampleInput"><h5>Title</h5></label>
                        <input type="title" class="form-control" id="formGroupExampleInput" name="title" value="{{$portfolio->title}}">
                    </div>
                    <div class="form-group mb-5">
                        <label for="formGroupExampleInput"><h5>Description</h5></label>
                        <textarea type="sub_title" class="form-control" id="formGroupExampleInput" name="sub_title" value="">{{$portfolio->sub_title}}</textarea>
                      </div>  
                    <div class="form-group mb-5">
                        <label for="formGroupExampleInput"><h5>Category</h5></label>
                        <input type="category" class="form-control" id="formGroupExampleInput" name="category" value="{{$portfolio->category}}">
                    </div>
                    <button type="submit"  name="submit" class="btn btn-outline-success mt-5 mb-5">submit</button>
                </form> 
            </div>
    </div>
</main> 
@endsection
