<div class="modal fade" id="newAccModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form @submit.prevent="addaccount">
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Firstname</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                     v-model="fname">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Lastname</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" v-model="lname">
               </div>
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Section</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                     v-model="seksyon">

               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Username</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" v-model="user">
               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" v-model="pwd">
               </div>

               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>

      </div>
   </div>
</div>