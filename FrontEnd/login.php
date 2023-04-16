<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="aseet/css/bootstrap.min.css">
    <link rel="stylesheet" href="aseet/css/style.css">
    <style>
    @media (max-width: 767px) {
      .box1 {
        display: none;
      }
    }
  </style>

</head>
<body>
  <div class="min-vh-100 p-xl-5 p-lg-5 p-md-5 d-flex align-items-center justify-content-center ">
    <div class="col-xl-10 col-lg-12 col-md-12 card ">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6   box1">
          <div class="row">
            <img src="aseet/abstract-grunge-decorative-relief-navy-blue-stucco-wall-texture-wide-angle-rough-colored-background.jpg"  class="img img-fluid" alt="" srcset="">
          </div>
          
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6  p-5 box2">
          <div class="row mt-5 mb-5">
            <div class="col-md-12 d-flex align-items-center justify-content-center ">
              <h2>LOGIN</h2>
            </div>
          </div>
          <form >
            <div class="row mb-3">
              <div class="col-md-12 mb-3 ">
                <div class="form-group">
                  <label>Email</label>
                  <input  type="text" id="email" name="username" class="input-field form-control " placeholder=" email">     
                </div>
              </div>
              <div class="col-md-12 ">
                <div class="form-group">
                  <label>Password</label>
                  <input  type="password" id="password" name="password" class=" input-field form-control" placeholder="password">                
                </div>
              </div>
              <div class="row align-items-end justify-content-end ">
                <div class="col-xl-4 col-lg-4 col-md-12 mt-3 ">
                  <span class="fp-text forget">Forgot Password</span>
                </div>
              </div>
            </div>
           
          </form>
          <div class="row mt-5">
              <div class="col-md-12 d-flex align-items-center justify-content-center pr-1">
               <button onclick="login()"  type="submit" class="btn btn-primary login-btn fs-4 col-md-12">LOGIN</button> 
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./aseet/js/process.js"></script>
</body>
</html>