@extends('layouts.admin_layout')
@section('content')


<main>


    <div class="container-fluid px-4">
            <h1 class="mt-4">Category</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Portfolio</li>
                <li class="breadcrumb-item active">Category</li>
            </ol> 

            <div class="card mb-4"></div>

            <div>
                <form action="{{route('admin.portfolio.category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group mb-5">
                        <label for="formGroupExampleInput"><h5>Add Category</h5></label>
                        <input type="category" class="form-control" id="formGroupExampleInput" name="category" value="">
                    </div>
                    <button type="submit"  name="submit" class="btn btn-outline-success mt-3 mb-5">submit</button>
                </form> 
            </div>
            {{-- Showing the data --}}
            <div class="card mt-5 mb-4">
            </div>
            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Category</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php($count=0)
                        @foreach ($cat as $cat)
                        @php($count++)
                        <tr>
                            <th scope="row">{{$count}}</th>
                            <td>{{$cat->category}}</td>
                            <td>
                                <div class="col-sm-2">
                                        <form action="{{route('admin.portfolio.catdestroy', $cat->id)}}" method="POST">
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit"  name="submit" value="Delete" class="btn btn-outline-danger">
                                        </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
    </div>
</main> 
@endsection






