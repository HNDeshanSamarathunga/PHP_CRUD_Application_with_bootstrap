<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="aseet/css/bootstrap.min.css">
    <link rel="stylesheet" href="aseet/css/style.css">
    
</head>
<body>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Sidebars · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link rel="stylesheet" href="aseet/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    
    <style>
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
    </style>

    
    <!-- Custom styles for this template -->
    
  <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
   

<main class="d-flex flex-nowrap">
  <?php
  include "sidebar.php";
  
  ?>
  

 
 

  <div class="b-example-divider b-example-vr"></div>
  <div class="col-md-10">
    <div class="px-3 py-2 text-bg-secondary">        
      <ul class="nav col-12 col-lg-auto my-2 justify-content-end my-md-0 text-small">
        <li>
          <a href="#" class="nav-link text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
              <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            </svg>
           
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
            </svg>
            Customers
          </a>
        </li>
      </ul>
   </div>
   <h2 class="mt-3 a">Student Details</h2><br>
        <div class="container-fluid">
          <div class="row">
          <div class="container ">
            
            <table class="table table-bordered" style="border-width: 10px;">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Birthday</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>NIC</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John Doe</td>
                  <td>01/01/1980</td>
                  <td>Male</td>
                  <td>123 Main St.</td>
                  <td>123456789V</td>
                  <td>johndoe@example.com</td>
                  <td><a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#editModal">Edit</a></td>
                  <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button></td>
                </tr>
                <tr>
                  <td>Jane Doe</td>
                  <td>02/02/1985</td>
                  <td>Female</td>
                  <td>456 Elm St.</td>
                  <td>987654321C</td>
                  <td>janedoe@example.com</td>
                  <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a></td>
                  <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button></td>
                </tr>
              
              </tbody>
            </table>
          </div>
          
    </div>
          </div>
        </div>
        <hr>
        
  </div>
  
  


</main>


    <script src="aseet/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
  </body>
</html>


<!--END DELET-->




<div class="modal fade" id="editModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  class="border border-3 rounded-1 p-3">
          <h4><b>Student Details</b></h4>  
          <div class="row mt-4">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div><br>
              <div class="form-group">
                <input type="date" class="form-control" id="dob" placeholder="Date Of Birth">
              </div><br>
              <div class="form-group">
                <input type="tel" class="form-control" id="contact" placeholder="Contact Number">
              </div><br>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div><br>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" id="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div><br>
              <div class="form-group">
                <textarea class="form-control" id="address" placeholder="Address"></textarea>
              </div><br>
              <div class="form-group">
                <input type="text" class="form-control" id="nic" placeholder="NIC">
              </div><br>
            </div>
          </div>
          <hr>
          <h4><b>Gardian Details</b></h4>  
          <div class="row mt-4">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div><br>
              <div class="form-group">
                <input type="date" class="form-control" id="dob" placeholder="Date Of Birth">
              </div><br>
              <div class="form-group">
                <input type="tel" class="form-control" id="contact" placeholder="Contact Number">
              </div><br>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div><br>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="who" placeholder="Who?">
                  </div>
              <br>
              <div class="form-group">
                <textarea class="form-control" id="address" placeholder="Address"></textarea>
              </div><br>
              <div class="form-group">
                <input type="text" class="form-control" id="nic" placeholder="NIC">
              </div>
            </div>
          </div>
          <br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button  class="btn btn-primary me-md-2 btn-lg" type="submit">Submit</button>
            <button class="btn btn-primary btn-lg" type="reset">Cancel</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are You Sure Delete Student
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok</button>
        <button type="button" class="btn btn-primary">No</button>
      </div>
    </div>
  </div>
</div>

<script src="./aseet/js/bootstrap.bundle.min.js"></script>
</body>
</html>