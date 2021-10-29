@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
            <h1 class="mt-4">List of Members</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Team</li>
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
                        <th scope="col">Twitter</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">LinkedIn</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                       @if (count($teams)>0)
                        @php($count=0)
                        @foreach ($teams as $teams)
                        @php($count++)
                            <tr>
                                <th scope="row">{{$count}}</th>
                                <td>{{$teams->name}}</td>
                                <td>{{$teams->designation}}</td>
                                <td>{{$teams->twitter}}</td>
                                <td>{{$teams->facebook}}</td>
                                <td>{{$teams->instagram}}</td>
                                <td>{{$teams->linkedin}}</td>
                                <td>
                                    
                                    <img height="100px" width="120px" src="{{url($teams->img)}}"  id="img">
                                </td>
                                <td>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <a href="{{route('admin.team.edit', $teams->id)}}" class="btn btn-outline-success">Edit</a>
                                            </div>
                                        </div>
                                </td> 
                                <td>
                                    <div class="col-sm-2">
                                            <form action="{{route('admin.team.destroy', $teams->id)}}" method="POST">
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
