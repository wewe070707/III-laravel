<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/message">Message</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="/message">Home</a></li>
              <li><a href="#">Page 1</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li><a href = "/logout" class="btn btn-default">logout</a></li>
              </ul>
            
          </div>
        </nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>