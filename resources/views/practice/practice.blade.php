<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body><center>
<form method="get" action="">
                @csrf
                <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label><b>Name</b></label>
                        <input type="text" class="form-control" name="name" placeholder="name" value="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1"><b>Email</b></label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label><b>Phone</b></label>
                        <input type="string" class="form-control" placeholder="Phone" name="phone" value="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label><b>Cnic</b></label>
                        <input type="text" class="form-control" name="cnic" placeholder="Cnic" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label><b>Address</b></label>
                        <input type="text" class="form-control" placeholder="Home Address" name="address" value="">
                      </div>
                    </div>
                  </div>
                  
                

                  <div class="row">
                  <div class="col-md-4 pl-1">
                    <div class="col-md-12">
                      <div class="form-group">
                        
                        <input type="submit" value="Submit" class="btn btn-primary">
                      </div>
                      </div>
                    </div>
                  </div>
                </form></center>
    </body>
    </html>