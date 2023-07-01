<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Students TimeIn</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form @submit.prevent="addstudents">
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Firstname</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                     v-model="fname">

               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Lastname</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp"
                     v-model="lname">

               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Section</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp"
                     v-model="sec">

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
            </form>
         </div>

      </div>
   </div>
</div>