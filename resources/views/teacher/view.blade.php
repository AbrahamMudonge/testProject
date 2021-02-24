<div class="modal fade" id="viewTeacher-{{$teacher->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Teacher Details:<strong class='text-success'>{{$teacher->teacherNames}}</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 class="modal-title" id="exampleModalLabel">Teacher Name:<strong class='text-primary'>{{$teacher->teacherNames}}</strong></h5>
      <h5 class="modal-title" id="exampleModalLabel">Phone Number:<strong class='text-primary'>{{$teacher->phoneNumber}}</strong></h5>
      <h5 class="modal-title" id="exampleModalLabel">Bio:<strong class='text-primary'>{{$teacher->bio}}</strong></h5>
      <h5 class="modal-title" id="exampleModalLabel">Created By:<strong class='text-primary'>{{$teacher->create_by}}</strong></h5>
      <h5 class="modal-title" id="exampleModalLabel">Created At:<strong class='text-primary'>{{$teacher->created_at}}</strong></h5>
         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm"  data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

