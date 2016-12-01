<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LogIn</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="Login_style.css">
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="Login_javascript.js"></script>
</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="loginprocess.php" role="login">
          <img src="Pictures/Icon1.png" class="img-responsive" alt="" />
          <input type="text" name="username" placeholder="Username" required class="form-control input-lg"  />
           <input type="password" name="password"  class="form-control input-lg" id="password" placeholder="Password" required="" />
          <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="#">Create account</a> or <a href="#">Reset password</a>
          </div>
          
        </form>
        
        <div class="form-links">
          <a href="#">www.buki.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>  
  
  
</div>

</body>
</html>
