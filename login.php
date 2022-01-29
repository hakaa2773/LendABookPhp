<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Lend A Book Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form action="php/addLogin.php" method="post">
  <form id="login-form">
    <p>
    <input type="text" id="email" name="email" placeholder="email" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="password" name="password" placeholder="password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" name="save" id="login" value="save">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="#">Create Account</a><p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>
