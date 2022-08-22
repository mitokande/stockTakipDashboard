<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, JotStock</title>
</head>
<style>
    .mid {
        width: 100px;
        height: 100px;

        position: absolute;
        top:0;
        bottom: 0;
        left: 0;
        right: 0;

        margin: auto;
    }
    a {
        color: inherit; /* blue colors for links too */
        text-decoration: none;
    }
    a:hover {
        color: inherit; /* blue colors for links too */
        text-decoration: inherit; /* no underline */
    }
</style>
<body>
<div class="container">
    <h1 style="text-align: center; margin-top: 100px">Hello, Welcome To JotStock</h1>
    <div style="margin-top: 100px">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/37/Jotform_logo.png">
        <div class="row">
            <div class="col-md-6">
                  <a class="btn btn-primary" href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}" class="btn btn-secondary">Register</a>
            </div>
        </div>
    </div>


</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
