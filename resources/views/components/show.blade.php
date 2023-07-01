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
                  <input type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp"
                     v-model="lname" readonly>

               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Section</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp"
                     v-model="sec" readonly>

               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">TimeIn</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp"
                     v-model="timeIn" readonly>

               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">TimeOut</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp"
                     v-model="timeout" readonly>

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