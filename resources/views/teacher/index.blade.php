@extends('layouts.app')
@section('content')
<div >
    <div >
        <div >
            <div >
                <div class="text-white card-header bg-info">
                    <h1 class="card-title">Teachers
                    <span>
                        {{$countTeachers}}
                    </span>
                    <!-- add new Teacher modal button-->
                    <a href="#" class="float-right btn btn-dark btn-sm" data-target="#addTeacher" data-toggle="modal">Add</a>
                   <!-- display success message -->
                    @if (session ('message'))
                        <div class="alert alert-success">
                        <small>{{session('message')}}</small>
                        
                        </div>
                        @endif
                    </h1>
                </div>

                <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Teacher Names</th>
                          <th>Phone Number</th>
                          <th>Bio</th>
                          <th>Created On</th>
                          <th>Created By</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse ($showTeachers as $teacher)
                        <tr>
                          <td>{{$teacher->teacherNames}}</td>
                          <td>{{$teacher->phoneNumber}}</td>
                          <td>{{$teacher->bio}}</td>
                          
                          <!-- diffforhumans helps to imput the created at in form of sec min days -->
                          <td>{{$teacher->created_at->diffForHumans()}}</td>
                          <td>{{$teacher->create_by}}</td>
                          <td>
                              <a href='#'data-toggle='modal' data-target='#viewTeacher-{{$teacher->id}}' class='btn btn-primary btn-sm'>view</a>
                              <a href='#' data-toggle='modal' data-target='#editTeacher-{{$teacher->id}}'  class='btn btn-success btn-sm'>edit</a>
                              <a href='#'class='btn btn-danger btn-sm'>delete</a>
                          </td>
                          
                        </tr>
                        
                        @include('teacher.edit')
                        @include('teacher.view')
                        @empty
                        <spam class="alert alert-danger">No Teacher found</span>
                      @endforelse
                      
                    </tbody>
                
                </table>
                {{$showTeachers->links()}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //include create modal form -->
@include('teacher.create')

@endsection