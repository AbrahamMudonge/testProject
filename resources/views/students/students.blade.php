@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-white card-header bg-info">
                    <h1 class="card-title">Students
                    <!-- add new student modal button-->
                    <a href="#" class="float-right btn btn-dark btn-sm" data-target="#addStudent" data-toggle="modal">Add</a>
                    </h1>
                </div>

                <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Name</th>
                          <th>Registration Number</th>
                          <th>Bio</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse ($showStudents as $student)
                        <tr>
                          <td>{{$student->name}}</td>
                          <td>{{$student->regno}}</td>
                          <td>{{$student->bio}}</td>
                        </tr>
                        @empty
                        <spam class="alert alert-danger">No Student found</span>
                      @endforelse
                    </tbody>
                
                
                
                
                
                
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/submit-students" method="post" autocomplete="off">
        @csrf
            <div class="row">
               <div class="col-lg-6"> 
                   <div class="form-group">
                       <label for="name">Name:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}"> 
                        @error('name')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6"> 
                   <div class="form-group">
                       <label for="regno">Registration Number:</label>
                        <input type="text" class="form-control @error('regno') is-invalid @enderror" name="regno" value="{{old('regno')}}" >
                        @error('regno')
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