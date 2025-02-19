       <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Doctor information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p><img src="{{asset('images')}}/{{$user->image}}" class="table-user-thumb" alt="" width="200"></p>
                    <p class="badge badge-pill badge-dark">Role: {{$user->role->name}}</p>
                    <p><b>Gender:</b> {{$user->gender}}</p>
                    <p><b>Name:</b> {{$user->name}}</p>
                    <p><b>Email:</b> {{$user->email}}</p>
                    <p><b>Address:</b> {{$user->address}}</p>
                    <p><b>Phone number:</b> {{$user->phone_number}}</p>
                    <p><b>Department:</b> {{$user->department}}</p>
                    <p><b>Education:</b> {{$user->education}}</p>
                    <p><b>About:</b> {{$user->description}}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  
                  </div>
                </div>
              </div>
            </div>
 