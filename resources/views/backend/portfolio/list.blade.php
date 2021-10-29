@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
            <h1 class="mt-4">List of Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Portfolio</li>
                <li class="breadcrumb-item active">List</li>
            </ol> 
            <div class="card mb-4"></div>
            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Small Image</th>
                        <th scope="col">Big Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>

                       
                  
                       
                        @php($count=0)
                        @foreach ($portfolios as $portfolio)
                        
                        @php($count++)
                            <tr>
                                <th scope="row">{{$count}}</th>
                                <td>{{$portfolio->title}}</td>
                                <td>{{Str::limit(strip_tags($portfolio->sub_title), 40)}}</td>
                                <td>{{$portfolio->category}}</td>
                                <td>
                                    
                                    <img height="100px" width="120px" src="{{url($portfolio->small_img)}}"  id="small_img">
                                </td>
                                <td>
                                    <img height="100px" width="120px" src="{{url($portfolio->big_img)}}" id="big_img">
                                </td>
                               
                                <td>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <a href="{{route('admin.portfolio.edit', $portfolio->id)}}" class="btn btn-outline-success">Edit</a>
                                            </div>
                                        </div>
                                </td> 
                                <td>
                                    <div class="col-sm-2">
                                            <form action="{{route('admin.portfolio.destroy', $portfolio->id)}}" method="POST">
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
