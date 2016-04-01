<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NPS Builder:-Login</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="//css/app.css" rel="stylesheet">

    <style>
        body {
            
            font-family: 'Lato';
            background-image: url(/assets/img/npsPoster.jpg);
            background-repeat:no-repeat;
background-attachment: fixed;
 
        }

        .fa-btn {
            margin-right: 6px;
        }


.panel{
    border: 2px solid darkgrey;
 -webkit-border-radius: 12px;
              -moz-border-radius: 12px;
              border-radius: 12px;
              -moz-box-shadow: 1px 1px 3px #000;
              -webkit-box-shadow: 1px 1px 3px #000;
              box-shadow: 1px 1px 3px #000;
}
.panel-heading {-webkit-border-radius: 12px;
              -moz-border-radius: 12px;
              border-radius: 12px;}

    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-inverse">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="/">
                    NPS Builder
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
               
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                   
                        <li><a href="/index.php/login">Login</a></li>
                       
                                           
                  </ul>
            </div>
        </div>
    </nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
        
<?php if(! is_null($msg)) echo $msg;?>

<form class="form-horizontal" role="form" method="POST" action="/index.php/login/registerProcess">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
<label class="col-md-4 control-label">First Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="fname" placeholder="First name">
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">Last Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="lname" placeholder="Last name">
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">E-Mail Address</label>
<div class="col-md-6">
<input type="email" class="form-control" name="email" placeholder="email">
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">User-Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="name" placeholder="Unique-name">
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">Password</label>
<div class="col-md-6">
<input type="password" class="form-control" name="password">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Confirm Password</label>
<div class="col-md-6">
<input type="password" class="form-control" name="password_confirmation">
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
  Register
</button>
</div>

</div>
</form>
</div>
</div>
</div>
</div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script src="/js/app.js"></script> 
</body>
</html>
