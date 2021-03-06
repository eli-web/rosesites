
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Login System</title>

    <!-- CSS -->
    <link href="stylesheet.css" rel="stylesheet">

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="spacer container-fluid"></div>
    <div class="container-fluid">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form id="login_info" action="index.html" method="post">
          <div class="form-group">
            <input type="text" id="username_input" value="" placeholder="username" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" id="password_input" value="" placeholder="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-default center-block">SUBMIT</button>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </body>
</html>
