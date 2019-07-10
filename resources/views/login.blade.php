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
<div class = "container">
    <h1>登入</h1>
    <hr>
    @if( session('error') )
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif
    
    <div class = "col-md-9 col-md-offset-2">
        <form class="form-horizontal" action = "/login" method = "post">
            @csrf
            <fieldset>                
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="account">Account</label>  
                <div class="col-md-4">
                <input id="account" name="account" type="text" placeholder="" class="form-control input-md" required="">
                
                </div>
            </div>
            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="password">Password</label>
                <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
                <a href = "/register"><span class="help-block">Register</span></a>
                </div>
            </div>
            
            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-8">
                <button id="" name="" class="btn btn-default">reset</button>
                <button id="submit" name="submit" class="btn btn-primary">submit</button>
                </div>
            </div>
        
            </fieldset>
        </form>
    </div>   
</div>
</body>
</html>