<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-light" style="height: 100vh;">
        
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-6 offset-3 d-flex flex-column justify-content-center align-items-center">
        
        <h2 class="mb-4">Sign in</h2>
        <form class="w-75" action="kt.php" method="POST">
        <label for="eMail">Email</label>
            <input class="form-control" type="email" name="email" placeholder="email">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="password">
          <div class="d-flex justify-content-center align-items-center mb-4">
            <input class="mx-2" type="checkbox">
            <label class="my-2"> Remember me</label>
          </div>
          <input class="btn btn-primary form-control" type="submit" value="Sign in">
          <a class="d-flex justify-content-center" href="http://localhost/apTECH-PHP-25-HIEP/PHP/03-20210226/form/signup.php" ><br>create an account</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>