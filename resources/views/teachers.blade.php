@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-white card-header bg-info">
                    <h1 class="card-title">Teachers
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
                          
                        </tr>
                        @empty
                        <spam class="alert alert-danger">No Teacher found</span>
                      @endforelse
                    </tbody>
                
                
                
                
                
                
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addTeacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Teacher Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/submit-teacher" method="post" autocomplete="off">
        @csrf
            <div class="row">
               <div class="col-lg-6"> 
                   <div class="form-group">
                       <label for="teacherNames">Teacher Name:</label>
                        <input type="text" class="form-control @error('teacherNames') is-invalid @enderror" name="teacherNames" value="{{old('teacherNames')}}"> 
                        @error('teacherNames')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6"> 
                   <div class="form-group">
                       <label for="phoneNumber">Phone Number:</label>
                        <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{old('phoneNumber')}}" >
                        @error('phoneNumber')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12"> 
                   <div class="form-group">
                       <label for="bio">Bio:</label>
                        <textarea class="form-control @error('bio') is-invalid @enderror" name="bio" cols="10" rows="5">{{old('bio')}}</textarea>
                        @error('bio')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Save changes</button>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm"  data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@endsection