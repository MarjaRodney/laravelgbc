<!DOCTYPE html>
<htm lang="en">

   <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta nam="vieport" content="width=device-width, initial-scale=1.0">
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
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav text-center mt-n4">

                     <a class="nav-link me-4" href="index.html">Logout</a>

                  </div>
               </div>
            </div>
         </nav>



         <div class="container-fluid  mt-5  ">


            <div class="container d-flex justify-content-center shadow p-3 mb-5 bg-body rounded "
               style="width: 30vw; height:  70vh;">

               <div class="container-fluid ">
                  <div class="row">
                     <div class="col-lg-12 ">
                        <div class="container-fluid bg-dark" style="height: 9vh;   width:  6vw; border-radius:  50%;">
                           <img src="../images/c.png" alt="" width="50" height="50"
                              class="d-inline-block align-text-top"
                              style="height: 9vh; width: 7vw; margin-left: -30px;">

                        </div>
                     </div>
                     <div class="col-lg-12 ">
                        <h4 class="text-center mt-2 text-secondary">Hekaru</h4>
                     </div>
                     <div class="col-lg-12 ">
                        <form action="{{ route('teacher.login') }}" method="post">
                           {!! csrf_field() !!}
                           <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="text" class="form-control" name="email" id="exampleInputEmail1"
                                 aria-describedby="emailHelp">
                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                           </div>
                           <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                           </div>

                           <!-- <button type="submit" class="btn btn-primary">submit</button> -->
                           <input type="submit" value="Login" class="btn btn-success">
                        </form>
                        <div class="container-fluid  d-inline mt-2">
                           <a class="float-start mt-3" href="#" style="text-decoration: none;" data-bs-toggle="modal"
                              data-bs-target="#exampleModal">Create Account</a>
                           <a class=" float-end mt-3" href="#" style="text-decoration: none;">forgot password</a>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
         <!-- Button trigger modal -->

         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="container-fluid bg-dark" style="height: 9vh;   width:  6vw; border-radius:  50%;">
                        <img src="../images/c.png" alt="" width="50" height="50" class="d-inline-block align-text-top"
                           style="height: 9vh; width: 7vw; margin-left: -20px;">

                     </div>
                     <div class="col-lg-12 ">
                        <h4 class="text-center mt-2 text-secondary">Hekaru</h4>
                     </div>
                     <div class=" col-lg-12  container-fluid ">
                        <form>
                           @csrf
                           <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Firstname</label>
                              <input type="text" name="name" class="form-control" aria-describedby="emailHelp"
                                 id="fname" v-model="fname">
                              <div id="emailHelp" class="form-text">We'll never share your information with anyone else.
                              </div>
                           </div>
                           <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Lastname</label>
                              <input type="text" name="email" class="form-control" id="lname" v-model="lname">
                           </div>
                           <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Section</label>
                              <input type="text" name="section" class="form-control" id="lname" v-model="section">
                           </div>

                           <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#NextModal" id="btn">
                              Submit
                           </button>

                        </form>
                     </div>
                  </div>

               </div>

            </div>
         </div>


         <!-- Button trigger modal -->


         <!-- Modal -->
         <div class="modal fade" id="NextModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="container-fluid bg-dark" style="height: 9vh;   width:  6vw; border-radius:  50%;">
                        <img src="../images/c.png" alt="" width="50" height="50" class="d-inline-block align-text-top"
                           style="height: 9vh; width: 7vw; margin-left: -20px;">

                     </div>
                     <div class="col-lg-12 ">
                        <h4 class="text-center mt-2 text-secondary">Hekaru</h4>
                     </div>
                     <div class=" col-lg-12  container-fluid ">
                        <form @submit="formSubmit">
                           @csrf
                           <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">username</label>
                              <input type="text" name="namea" class="form-control" aria-describedby="emailHelp"
                                 id="userRegister" v-model="username">
                              <div id="emailHelp" class="form-text">We'll never share your information with anyone else.
                              </div>
                           </div>
                           <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">password</label>
                              <input type="text" name="emails" class="form-control" id="Userpass" v-model="password">
                           </div>

                           <button type="submit" class="btn btn-primary" id="btn">Submit</button>
                           <!-- <input type="submit" value="register" class="btn btn-success"> -->

                        </form>
                     </div>

                  </div>
               </div>
            </div>



         </div>
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