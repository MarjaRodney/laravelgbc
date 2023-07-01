<x-header />
<div id="app">
   <x-navbar />
   <div class="container-fluid  " style="margin-top: 40px;">
      <div class=" container mt-5">
         <table class="table">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
               data-bs-target="#exampleModal">Create</button>
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Firstname</th>
                  <th scope="col">Lastname</th>
                  <th scope="col">Section</th>
                  <th scope="col">timeIn</th>
                  <th scope="col">timeOut</th>
                  <th scope="col">Status</th>
                  <th scope="col">action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($data as $user)
               <tr>

                  <td>{{ $user->id}}</td>
                  <td>{{ $user->Firstname}}</td>
                  <td>{{ $user->Lastname}}</td>
                  <td>{{ $user->Section}}</td>
                  <td>{{ $user->timeIn}}</td>
                  <td>{{ $user->timeOut}}</td>
                  <td>{{ $user->status}}</td>
                  <td>
                     <button type="button" class="btn btn-warning" @click="editstudents({{ $user->id}})"
                        data-bs-toggle="modal" data-bs-target="#editModal">update</button>
                     <button type="button" class="btn btn-info ms-2" @click="editstudents({{ $user->id}})"
                        data-bs-toggle="modal" data-bs-target="#viewModal">view</button>
                     <button type="button" class="btn btn-danger ms-2"
                        @click="deletestudent({{ $user->id}})">Delete</button>
                  </td>
               </tr>
               @endforeach

            </tbody>
         </table>

         <x-create-modal />

         <!-- Modal -->
         <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">update Students</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form @submit.prevent="updatestudent">
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Firstname</label>
                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                              v-model="fname">

                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Lastname</label>
                           <input type="text" class="form-control" id="exampleInputPassword1"
                              aria-describedby="emailHelp" v-model="lname">

                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Section</label>
                           <input type="text" class="form-control" id="exampleInputPassword1"
                              aria-describedby="emailHelp" v-model="sec">

                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">TimeIn</label>
                           <input type="time" class="form-control" id="exampleInputPassword1" v-model="timein">
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">TimeOut</label>
                           <input type="time" class="form-control" id="exampleInputPassword1" v-model="timeOut">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">view Students</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Firstname</label>
                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                              v-model="fname" readonly>

                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Lastname</label>
                           <input type="text" class="form-control" id="exampleInputPassword1"
                              aria-describedby="emailHelp" v-model="lname" readonly>

                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Section</label>
                           <input type="text" class="form-control" id="exampleInputPassword1"
                              aria-describedby="emailHelp" v-model="sec" readonly>

                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">TimeIn</label>
                           <input type="time" class="form-control" id="exampleInputPassword1" v-model="timein" readonly>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">TimeOut</label>
                           <input type="time" class="form-control" id="exampleInputPassword1" v-model="timeOut"
                              readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- Button trigger modal -->
      </div>
   </div>
   <!-- Modal -->

</div>

<x-script />