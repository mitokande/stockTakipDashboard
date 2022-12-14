<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>
<div class="container" style="margin-top: 100px">
    <h1 style="text-align: center">Welcome To JotStock</h1>
    <h4 style="text-align: center">Sign Up To Our World</h4>
    <div
        style="background: #F5F5F5; margin: 15px; padding: 30px; border-radius: 20px; box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);">
        <form style="margin-top: 50px" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone
                    else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Shop Name</label>
                <input name="shopName" type="text" class="form-control" id="shopName">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Shop Category</label>
                <input name="shopCategory" type="text" class="form-control" id="shopCategory">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">Shop Image</label>
                
                <div class="col-sm-5">
                    <input type="file" name="image" class="form-control" id="field-1">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <img src="https://upload.wikimedia.org/wikipedia/commons/3/37/Jotform_logo.png">

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>
</html>
