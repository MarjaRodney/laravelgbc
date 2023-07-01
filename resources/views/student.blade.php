<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&family=Raleway:wght@100&display=swap"
      rel="stylesheet">
   <script src="https://kit.fontawesome.com/2b6214662f.js" crossorigin="anonymous"></script>

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="../css/style.css">

   <title>Hekaru</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
   <div id="app">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2 ">
         <div class="container-fluid">
            <a class="navbar-brand " href="#">
               <img src="../images/c.png" alt="" width="50" height="40" class="d-inline-block align-text-top">
               <p class="d-inline-block link mt-1 align-text-top">Hekaru</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
               aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
               <div class="navbar-nav text-center mt-n4">

                  <a class="nav-link me-4 text-light" href="index.html">Logout</a>

               </div>
            </div>
         </div>
      </nav>



      <div class="container-fluid  " style="margin-top: 170px;">
         <div class=" container mt-5">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">#</th>

                     <th scope="col" id="userDetails" data-firstname="{{ $user->firstname }}"
                        data-lastname="{{ $user->lastname }}" data-section="{{ $user->section}}">
                        @isset($user)
                        {{ $user->firstname }}{{ $user->lastname }}
                        <button type="button" class="btn btn-primary ms-2"
                           @click="doTimeIN($event,firstname,lastname,section)">TimeIn</button>
                        <button type="button" class="btn btn-danger ms-2" @click="dotimeOut(id)">TimeOut</button>
                        @else
                        User data not available.
                        @endisset
                     </th>



                     <th scope="col">Handle</th>
                  </tr>
               </thead>
               <tbody>

               </tbody>
         </div>
      </div>

      </table>
      <div class="container" id="cont" style="margin-top: 50px; height: 10vh;  background:  #d4fad9; display: none;">
         <div class="container-fluid  d-inline mt-2 text-dark">

            <label class="mt-4 ms-3"> {{ $user->firstname }}{{ $user->lastname }}</lalbel>

               <label class="ms-4" id="native">

               </label>

            </label>


         </div>
      </div>
      <div class="container" style="margin-top: 50px; height: 10vh;  background:  #fac3ca; display: none;" id="pont">
         <div class="container-fluid  d-inline mt-2 text-dark">
            <label class="mt-4 ms-3"> {{ $user->firstname }}{{ $user->lastname }}</lalbel>
               <label class="ms-4" id="natives"> </label>


         </div>
      </div>
      <!-- Button trigger modal -->
   </div>
   <!-- Modal -->

   </div>

   <script src="../js/vue.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
   <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
   </script>
   <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYCqW62982wK_cz3YKMk_0N25OlRVnSVk&callback=initMap&v=weekly"
      defer></script>
   <script src="../js/index.js"></script>


</body>

</html>