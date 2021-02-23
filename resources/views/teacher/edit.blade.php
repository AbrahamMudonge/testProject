<div class="modal fade" id="editTeacher-{{$teacher->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Teacher Details:<strong class='text-success'>{{$teacher->teacherNames}}</strong></h5>
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
                        <input type="text" class="form-control @error('teacherNames') is-invalid @enderror" name="teacherNames" value="{{$teacher->teacherNames}}"> 
                        @error('teacherNames')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6"> 
                   <div class="form-group">
                       <label for="phoneNumber">Phone Number:</label>
                        <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{$teacher->phoneNumber}}" >
                        @error('phoneNumber')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12"> 
                   <div class="form-group">
                       <label for="bio">Bio:</label>
                        <textarea class="form-control @error('bio') is-invalid @enderror" name="bio" cols="10" rows="5">{{$teacher->bio}}</textarea>
                        @error('bio')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Update changes</button>
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