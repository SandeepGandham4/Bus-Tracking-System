<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
      <h3 style="text-align:center; color: purple">Bus Tracking</h3> 
        <img src="assets/img/busg.jpg"
          class="img-fluid" alt="Sample image">
          
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="signup-check.php" method="post">
          

          <!-- Email input -->
          <div class="form-outline mb-4">
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" id="form3Example3" class="form-control form-control-lg" name ="name"
              placeholder="Name" value="<?php echo $_GET['name']; ?>" />
          <?php }else{ ?>
               <input type="text" id="form3Example3" class="form-control form-control-lg" name ="name"
              placeholder="Name" />
          <?php }?>
            <label class="form-label" for="form3Example3">Name</label>
          </div>
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg" name ="uname"
              placeholder="Enter a valid email address"  />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg" name ="password"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg" name ="re_password"
              placeholder="Re_password" />
            <label class="form-label" for="form3Example4">Re Password</label>
          </div>
          <div>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
     	    <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2" style="color: purple;">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign UP</button>
            <p class="small fw-bold mt-2 pt-1 mb-0"> Have an account? <a href="index.php"
                class="link-danger">Login</a></p>
          </div>

        </form>
        <br>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved.
    </div>
    <!-- Copyright -->
  </div>
</section>
</body>
</html>