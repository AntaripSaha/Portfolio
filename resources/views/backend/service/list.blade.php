@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
            <h1 class="mt-4">List of Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Service</li>
                <li class="breadcrumb-item active">List</li>
            </ol> 
            <div class="card mb-4"></div>
            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Imported From</th>
                        <th scope="col">Image</th>
                        <th scope="col">Image</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                       @if (count($services)>0)
                        @php($count=0)
                        @foreach ($services as $service)
                        @php($count++)
                            <tr>
                                <th scope="row">{{$count}}</th>
                                <td>{{$service->icon}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{Str::limit(strip_tags($service->description), 40)}}</td>
                                <td>{{$service->category}}</td>
                                <td>{{$service->name}}</td>
                                <td>{{$service->import}}</td>
                                <td>
                                    
                                    <img height="100px" width="120px" src="{{url($service->img1)}}"  id="img1">
                                </td>
                                <td>
                                    
                                    <img height="100px" width="120px" src="{{url($service->img2)}}"  id="img2">
                                </td>
                                <td>
                                    
                                    <img height="100px" width="120px" src="{{url($service->img3)}}"  id="img3">
                                </td>
                                <td>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <a href="{{route('admin.service.edit', $service->id)}}" class="btn btn-outline-success">Edit</a>
                                            </div>
                                        </div>
                                </td> 
                                <td>
                                    <div class="col-sm-2">
                                            <form action="{{route('admin.service.destroy', $service->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit"  name="submit" value="Delete" class="btn btn-outline-danger">
                                            </form>
                                     </div>
                                </td>                          
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                  </table>
            </div>
    </div>
</main> 
@endsection
