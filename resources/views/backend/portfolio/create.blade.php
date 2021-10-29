@extends('layouts.admin_layout')
@section('content')


<main>


    <div class="container-fluid px-4">
            <h1 class="mt-4">Create Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Portfolio</li>
                <li class="breadcrumb-item active">Create</li>
            </ol> 

            {{-- Margin line --}}
            <div class="card mb-4"></div> 


            <div>
                
                <form action="{{route('admin.portfolio.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT')}}

                    
          
                      <div class="row">
                        <div class="from-group col-md-6 mt-2 mb-5">
                            <h4>Small Image</h4>
                            <img  height="180px" width="280px" src="{{asset('assets/img/small_img.png')}}" class="img thumbnail">
                            <input class="mt-2" type="file" name="small_img">
                        </div>
                      </div>

                      <div class="row">
                        <div class="from-group col-md-6 mt-2 mb-5">
                            <h4>Big Image</h4>
                            <img  height="280px" width="380px" src="{{asset('assets/img/big_img.png')}}" class="img thumbnail">
                            <input class="mt-2" type="file" name="big_img">
                        </div>
                      </div>

                      
                    <div class="form-group mb-5">
                        <label for="formGroupExampleInput"><h5>Title</h5></label>
                        <input type="title" class="form-control" id="formGroupExampleInput" name="title" value="">
                    </div>

                    <div class="form-group mb-5">
                      <label for="formGroupExampleInput"><h5>Description</h5></label>
                      <textarea type="sub_title" class="form-control" id="formGroupExampleInput" name="sub_title" value=""></textarea>
                    </div>


                    <div class="form-group mb-5">
                      <label for="category"><h5>Select Category:</h5></label>
                      <select name="category" id="category">
                        @foreach ($categories as $category)
                        <option value="{{$category->category}}">{{$category->category}}</option>
                        @endforeach
                      </select>
                    </div>


          
                    <button type="submit"  name="submit" class="btn btn-outline-success mt-5 mb-5">submit</button>

                  </form> 

            </div>

     


    </div>


</main> 
@endsection
