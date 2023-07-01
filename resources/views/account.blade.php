<x-header />
<div id="app">
   <x-navbar />
   <div class="container-fluid  " style="margin-top: 40px;">
      <div class=" container mt-5">
         <h1>Account </h1>
         <table class="table">
            <x-accountable />
            <tbody>
               @foreach ($data as $user)
               <tr>
                  <td>{{ $user->id}}</td>
                  <td>{{ $user->firstname}}</td>
                  <td>{{ $user->lastname}}</td>
                  <td>{{ $user->section}}</td>
                  <td>{{ $user->email}}</td>

                  <td>{{ $user->role}}</td>
                  <td>
                     <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#newAccModal">Create</button>
                     <button type="button" class="btn btn-info ms-2" @click="showaccount({{ $user->id}})"
                        data-bs-toggle="modal" data-bs-target="#viewModal">view</button>
                     <button type="button" class="btn btn-danger ms-2"
                        @click="deleteaccount({{ $user->id}})">Delete</button>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>

         <!-- Create modal -->
         <!-- Button trigger modal -->

         <x-cmodalaccount />
         <!-- Modal -->
         <x-viewaccount />

      </div>
   </div>
</div>
<x-script />