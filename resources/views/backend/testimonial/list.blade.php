@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
            <h1 class="mt-4">List of Testimonials</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Testimonial</li>
                <li class="breadcrumb-item active">List</li>
            </ol> 
            <div class="card mb-4"></div>
            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Quote</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                       @if (count($testimonial)>0)
                        @php($count=0)
                        @foreach ($testimonial as $testimonial)
                        @php($count++)
                            <tr>
                                <th scope="row">{{$count}}</th>
                                <td>{{$testimonial->name}}</td>
                                <td>{{$testimonial->designation}}</td>
                                <td>{{Str::limit(strip_tags($testimonial->quote), 40)}}</td>
                                <td>
                                    
                                    <img height="100px" width="120px" src="{{url($testimonial->img)}}"  id="img">
                                </td>
                                <td>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <a href="{{route('admin.testimonial.edit', $testimonial->id)}}" class="btn btn-outline-success">Edit</a>
                                            </div>
                                        </div>
                                </td> 
                                <td>
                                    <div class="col-sm-2">
                                            <form action="{{route('admin.testimonial.destroy', $testimonial->id)}}" method="POST">
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
