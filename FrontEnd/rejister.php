<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejister</title>
    <link rel="stylesheet" href="aseet/css/bootstrap.min.css">
    <link rel="stylesheet" href="aseet/css/style.css">
</head>
<body>
    
    <div class="container">
        <h2 style="text-align: center; padding-top: 10px;">Registration Form</h2>
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
      
      
</body>
</html>