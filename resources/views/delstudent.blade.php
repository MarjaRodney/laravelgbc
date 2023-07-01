<x-header />
<div id="app">
   <x-navbar />
   <div class="container-fluid  " style="margin-top: 40px;">
      <div class=" container mt-5">
         <table class="table">
            <x-table-component />
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
                     <button type="button" class="btn btn-success"
                        @click="retrievestudents({{ $user->id}})">Retrieve</button>
                     <button type="button" class="btn btn-info ms-2" @click="Showstudents({{ $user->id}})"
                        data-bs-toggle="modal" data-bs-target="#viewModal">view</button>
                     <button type="button" class="btn btn-danger ms-2"
                        @click="permanentstudent({{ $user->id}})">Delete</button>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
         <x-show />
         <!-- Button trigger modal -->
      </div>
   </div>
</div>
<x-script />