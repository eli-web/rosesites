<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery library -->
     <script src="jquery-3.3.1.min.js"></script>
    <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.min.js"></script>
    <!-- External CSS -->
     <link type="text/css" rel="stylesheet" href="stylesheet.css">
    <!-- External JavaScript -->
      <script src="createCookie.js"></script>
      <script src="verifyLogin.js"></script>
      <script src="createLoginCookies.js"></script>
      <script src="hideElement.js"></script>
    <!-- Title -->
    <title>Login</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <p class="hidden-alert bg-danger center-flex text-center rounded" id="incorrectLoginAlert">
            <button type="button" class="close hide-element align-text-bottom" aria-label="Close" onclick="hideElement()"><span aria-hidden="true">&times;</span></button>
            The username or password you entered was incorrect.
          </p>
          <p class="hidden-alert bg-warning center-flex text-center rounded" id="emptyBoxAlert">
            <button type="button" class="close hide-element align-text-bottom" aria-label="Close" onclick="hideElement()"><span aria-hidden="true">&times;</span></button>
            Please enter both a username and a password.
          </p>
          <div id="loginBox" class="rounded">
            <form id="loginForm">
              <label class="form-group">Please log in.</label>
              <input type="text" name="username-box" placeholder="username" id="user" class="form-control"><br>
              <input type="text" name="password-box" placeholder="password" id="pass" class="form-control"><br>
              <button type="button" form="loginForm" onclick="doLoginFunctions()" class="btn btn-primary" value="Submit">Submit</button>
            </form>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </body>
</html>
